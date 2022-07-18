<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Rules\ValidateRole;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Http\Response;
use App\Http\Traits\ResponseTrait;


class UserController extends Controller
{
    use ResponseTrait;
    /**
     * @var UserRepository
     */
    protected $UserRepo;

    public function __construct(UserRepository $UserRepo)
    {
        $this->userRepository = $UserRepo;
    }

    // user list
    public function userList(Request $request)
    {
        $conditions = [];
        $orderBy = 'id';
        $sort = 'asc';
        $paged = 10;

        if ($request->filled('sort') && !empty($request->get('sort'))) {
            $tempSort = $request->get('sort');
            $splitSort = explode('|', $tempSort, 2); // Restricts it to only 2 values, for order by and and sort field.
            $orderBy = $splitSort[0];
            $sort = !empty($splitSort[1]) ? $splitSort[1] : '';
        }

        if ($request->filled('per_page') && !empty($request->get('per_page'))) {
            $paged = $request->get('per_page');
        }

        if ($request->filled('first_name')) {
            $conditions[] = ['first_name', 'like', '%' . $request->get('first_name') . '%'];
        }
        if ($request->filled('last_name')) {
            $conditions[] = ['last_name', 'like', '%' . $request->get('last_name') . '%'];
        }
   
        if ($request->filled('status')) {
            $conditions[] = ['status', 'like', '%' . $request->get('status') . '%'];
        }
        $role = "";
        if ($request->filled('role')) {
            $role =  $request->get('role');
        }
        $users =  $this->userRepository->getUsers($conditions, $paged, $orderBy, $sort, $role);

        return response()->json(
            $users,
            200
        );
    }

    // user create
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [           
            'email' => 'required|unique:users',
            'password' => 'required'      
        ])->setAttributeNames([ // set Attributes names for display           
            'email' => 'Email',
            'password' => 'Password',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY); // 422 : Validation error response
        } else {
            // user create
            $user = $this->userRepository->create($request);
            $user_id = $user->id;
   
            if (!empty($user)) {
                return $this->successResponse('User has been created successfully!.'); //200 success
            }
        }
    }

    // user update
    public function update(Request $request)
    {
        $role = (Auth::user()->roles->pluck('id'));

        $validate_profile_pic = "";
        if ($request->hasFile('profile_picture')) {
            $validate_profile_pic = 'image';
        }

        $validate_signature = "";
        if ($request->hasFile('signature')) {
            $validate_signature = 'image';
        }

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_no' => 'required|digits:10',
            'company_id' => Rule::requiredIf($role[0] !=  Config::get('utilities.insurance_supervisor')),
            'branch_id' => Rule::requiredIf($role[0] ==  Config::get('utilities.insurance_supervisor')),
            'role' => ['required', new ValidateRole($request)],
            'email' => 'required|unique:users,email,' . $request['id'],
            //'password' => 'required',
            'profile_picture' => $validate_profile_pic,
            'signature' => $validate_signature,
            'status' => 'required'
        ], [ // set custom messages for the rule
            'profile_picture.required_if'    => 'Profile Picture field is required.',
            'signature.required_if'    => 'Signature field is required.'
        ])->setAttributeNames([ // set Attributes names for display
            'title' => 'Title',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'company_id' => 'Company',
            'branch_id' => 'Branch',
            'contact_no' => 'Contact Number',
            'email' => 'Email',
            'role' => 'Role',
            'profile_picture' => 'Profile Picture',
            'signature' => 'Signature',
        ]);

        if ($validator->fails()) {
            $errors = array();
            foreach ($validator->errors()->getMessages() as $key => $val) {
                $errors[$key] =  $val[0];
            }

            return response()->json([
                'success' => false,
                'error' => [
                    'code' => 'BadArgument',
                    'message' => 'Parameters related errors',
                    'target' => 'updateUser',
                    'details' => $errors
                ]
            ], 200);
        } else {
            // user update
            $user = $this->userRepository->update($request);

            // Upload user Profile Picture and update user
            $user_id = $user->id;
            if ($request->hasFile('profile_picture')) {
                $image_key = md5(rand(1, 10) . microtime());
                //  $image = $request->file('profile_picture'); // image base64 encoded
                $extension  = $request->file('profile_picture')->extension();
                $imageName = $image_key . "." . $extension; //generating unique file name;

                $destinationPath = storage_path('app/public/user/' . $user_id);
                $url = 'user/' . $user_id . '/' . $imageName;

                //Move uploaded user profile_picture file
                $request->profile_picture->move($destinationPath, $imageName);

                $image_data = ['id' => $user_id, 'profile_picture' => $url];
                $user = $this->userRepository->upload_pro_pic($image_data);
            }
            // Upload user Signature and update user
            if ($request->hasFile('signature')) {
                $image_key = md5(rand(1, 10) . microtime());

                $extension  = $request->file('signature')->extension();
                $imageName = $image_key . "." . $extension; //generating unique file name;

                $destinationPath = storage_path('app/public/user/' . $user_id);
                $url = 'user/' . $user_id . '/' . $imageName;

                //Move uploaded user profile_picture file
                $request->signature->move($destinationPath, $imageName);

                $image_data = ['id' => $user_id, 'signature' => $url];
                $user = $this->userRepository->upload_signature($image_data);
            }

            if (!empty($user)) {
                return response()->json([
                    'success' => [
                        'code' => 'true',
                        'message' => 'User has been updated successfully!.'
                    ]
                ], 200);
            }
        }
    }

    //get user data by id
    public function getUserDetails(Request $request)
    {
        $id = $request->route('id');
        $user =  $this->userRepository->get_user_details($id);
        return response()->json(
            [
                'data' => $user
            ],
            200
        );
    }
}
