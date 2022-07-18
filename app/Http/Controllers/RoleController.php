<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\PermissionRepository;
use App\Repositories\RoleRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class RoleController extends Controller
{
    public function __construct(RoleRepository $roleRepository,PermissionRepository $permissionRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    public function roleList(Request $request)
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

        if ($request->filled('name')) {
            $conditions[] = ['name', 'like', '%' . $request->get('name') . '%'];
        }
        if ($request->filled('status')) {
            $conditions[] = ['status', 'like', '%' . $request->get('status') . '%'];
        }

        $roles =  $this->roleRepository->getRoles($conditions, $paged, $orderBy, $sort);

        return response()->json(
            $roles,
            200
        );
    }

    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'permissions' => 'required|array',
            'name' => 'required|unique:roles',
            'status'=> 'required'
        ]);

        if ($validator->fails()) {
            $errors = array();
            foreach ($validator->errors()->getMessages() as $key => $val) {
                $errors[$key] =  $val[0];
            }

            return response()->json([
                'success'=> false,
                'error' => [
                    'code' => 'BadArgument',
                    'message' => 'Parameters related errors',
                    'target' => 'createRole',
                    'details' => $errors
                ]
            ], 200);
        } else {
            $role = $this->roleRepository->create($request);


            if (!empty($role)) {
                return response()->json([
                    'success' => [
                        'code' => 'true',
                        'message' => 'Role has been created successfully!.'
                    ]
                ], 200);
            }
        }
    }

    public function update(Request $request)
    {

            $validator = Validator::make($request->all(), [
                'id'=> 'required|numeric',
                'permissions' => 'required|array',
                'name' => 'required|unique:roles,name,'.$request['id'],
                'status'=> 'required'
            ]);
            if ($validator->fails()) {

                $errors = array();
                foreach ($validator->errors()->getMessages() as $key => $val) {
                    $errors[$key] =  $val[0];
                }

                return response()->json([
                    'error' => [
                        'code' => 'BadArgument',
                        'message' => 'Parameters related errors',
                        'target' => 'updateRole',
                        'details' => $errors
                    ]
                ], 200);
            } else {
                $roleData = $this->roleRepository->getById($request['id']);
                if(!empty($roleData)){
                    $role = $this->roleRepository->update($request);
                    if (!empty($role)) {
                        return response()->json([
                            'success' => [
                                'code' => 'true',
                                'message' => 'Role has been updated successfully!.'
                            ]
                        ], 200);
                    }else{
                        return response()->json([
                            'error' => [
                                'code' => 'BadArgument',
                                'message' => 'Role does not exist.',
                                'target' => 'updateRole'
                            ]
                        ], 200);
                    }
                }else{
                    return response()->json([
                        'error' => [
                            'code' => 'BadArgument',
                            'message' => 'Role does not exist.',
                            'target' => 'updateRole'
                        ]
                    ], 200);
                }
            }


    }

    function getRole(Request $request){
        $id = $request->route('id');
        $role =  $this->roleRepository->getById($id);
        if($role != null){
            $allPermissions = $this->permissionRepository->get();

            $assignedPermissions= $role->permissions->pluck('name')->all();

            return response()->json([
                'role' =>  $role,
                'all_permissions' => $allPermissions,
            ], 200);
        }else{
            return response()->json([
                'error' => [
                    'code' => 'BadArgument',
                    'message' => 'Role does not exist.',
                    'target' => 'getRole'
                ]
            ], 200);
        }

    }

    // without paginated list
    public function npRoleList(){
        $role_list =  $this->roleRepository->npRoleList();

        return response()->json(
            [
                'data' => $role_list
            ],
            200
        );
    }





}
