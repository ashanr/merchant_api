<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Http\Traits\ResponseTrait;

class AuthController extends Controller
{
    protected $userRepository;
    use ResponseTrait; // Trait for http response

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /** User login */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255', // max 255 characters
            'password' => 'required|string|min:6', // password min 8 characters required
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY); // 422 : Validation error response
        }


        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) { // check credentials
            return $this->errorResponse('Invalid login credentials', Response::HTTP_UNAUTHORIZED); // 401 : Unauthorized response
        } else {
            $user = Auth::getLastAttempted(); // get user details

            if ($user->status == 1) {
                $permissions = $user->getPermissionsViaRoles()->pluck('name')->toArray();
                // set permissions to the token
                $tokenResult = $user->createToken('Personal Access Token', $permissions);

                $user_role = $user->roles;

                $loginResult = [
                    'success' => true,
                    'access_token' => $tokenResult->accessToken,
                    'user_data' => [
                        'user_id' => $user->id,                        
                        'email' => $user->email,
                        'role' =>  $user_role[0]->id,
                        'role_name' =>  $user_role[0]->name
                    ],
                ];

                //Success login 
                return $this->dataResponse($loginResult);
            } else {
                // Inactive user response
                return $this->errorResponse('Inactive user. Please contact system administrator', Response::HTTP_UNAUTHORIZED); // 401 : Unauthorized response
            }
        }
    }

    /** User logout */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return $this->successResponse('Successfully logged out');
    }

}
