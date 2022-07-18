<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * UserRepository constructor.
     *
     * @param  User  $model
     */
    public function __construct(User $model, Role $role)
    {
        $this->model = $model;
        $this->role = $role;
    }

    /**
     * UserRepository constructor.
     *
     * @param  User  $model
     */
    public function getUsers($conditions = [], $paged = 25, $orderBy = 'created_at', $sort = 'desc', $filter_role = [])
    {
      //  $query =  $this->model->with('roles');

        $query = $this->model
            ->where($conditions)
            ->orderBy($orderBy, $sort);
        return $query->paginate($paged);
    }

     /**
     * Create New Forum User at Registration
     *
     * @param  Email valid email | username
     * @param  Password  string at length 8
     */
    public function create($data)
    {
        $userData = [           
            'email' => $data['email'],
            'password' => Hash::make($data['password']),           
            'created_by' => 1,
            'status' => 1, //Active 
            'created_id' => date('Y-m-d H:i:s'),
        ];
        $user = User::create($userData);

        $role = $this->role->where('id', 2)->first()->name; //Set Role 4
        // assign role
        if ($user) {
            $user->assignRole($role);
        }

        $dataToEmail = array();
        $dataToEmail['token'] = $this->generateToken($user->email); // add token to the data array
        $dataToEmail['type'] = 'NEW'; // add email type to the data array
      
        return $user;
    }

    public function update($data)
    {
        $id = $data['id'];
        $user = $this->model->where('id', $id)->first();

        if ($user != null) {
            $created_user_role = Auth::user()->roles->pluck('id');
            $branch_id = '';
            if ($created_user_role[0] == Config::get('utilities.insurance_supervisor')) {
                // insurance operator set selected branch
                $branch_id = $data['branch_id'];
                $data['company_id'] = Auth::user()->company_id;
            } else {
                // SLII and insurance supervisor set HO branch
                $branch = Branch::where('branch_code', 'HO')->where('company_id', $data['company_id'])->get()->toArray();
                if (empty($branch)) {
                    $branch = new Branch;
                    $branch->branch_name = 'Head Office';
                    $branch->company_id = $data['company_id'];
                    $branch->branch_code = 'HO';
                    $branch->status = 1;
                    $branch->save();
                } else {
                    $branch = Branch::find($branch[0]['id']);
                }
                $branch_id = $branch->id;
            }

            $user->update([
                'title' => $data['title'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'contact_no' => $data['contact_no'],
                'email' => $data['email'],
                //'password' => Hash::make($data['password']),
                'role' => $data['role'],
                'company_id' => $data['company_id'],
                'branch_id' => $branch_id,
                'status' => $data['status'],
                'updated_id' => date('Y-m-d H:i:s'),
            ]);

            $role = $this->role->where('id', $data['role'])->first()->name;

            if ($user) {
                // update user role
                $user->syncRoles($role);
            }
        }


        return $user;
    }

  
    public function get_user_details($id)
    {
        return User::with(['roles'])->find($id);
    }

    public function update_password($data, $key, $type)
    {
        $user = null;

        if ($type == 'reset') {
            $user = $this->model->where('id', $key)->first();
        } elseif ($type == 'forgot') {

            $user = $this->model->where('email', $key)->first();
        }

        if ($user != null) {
            $user->update([
                'password' => Hash::make($data['password']),
                'reset_required' => 0
            ]);
            //event(new UserCreated($data, $user));
        }
        return $user;
    }

    /** Generate token for temp links */
    private function generateToken($email)
    {
 
        // Create random token 
        $token = Str::random(10);

   
    }
}
