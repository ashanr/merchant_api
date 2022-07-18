<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class UserRepository.
 */
class RoleRepository extends BaseRepository
{
    /**
     * UserRepository constructor.
     *
     * @param  Role  $model
     */
    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function getRoles($conditions = [], $paged = 25, $orderBy = 'created_at', $sort = 'desc')
    {
        $query =  $this->model
            //->whereNotIn('id',['1','2','3'])
            ->where($conditions)
            ->orderBy($orderBy, $sort);
        return $query->paginate($paged);
    }

    public function roleList()
    {
        $query =  $this->model;
        return $query->get()->toArray();
    }

    public function create($data)
    {
        $role = new Role;
        $role->name = $data['name'];
        $role->status = $data['status'];
        $role->slii = $data['slii'];
        $role->guard_name = 'web';
        $role->save();
        if (!empty($role) && !empty($data['permissions'])) {
            $role->givePermissionTo(array_merge( $data['permissions'] ,array('dashboard')));
        }
        return $role;

    }



    public function update($data)
    {
        $id = $data['id'];
        $role = Role::find($id);
        if($role != null){
            $role->name = $data['name'];
            $role->status = $data['status'];
            $role->save();
            if (!empty($role) && !empty($data['permissions'])) {
                $role->syncPermissions(array_merge( $data['permissions'] ,array('dashboard')));
            }

        }
        return $role;
    }

    public function npRoleList(){

        $role = (Auth::user()->roles->pluck('id'));
        if (!in_array($role[0],Config::get('utilities.insurance_roles'))) { // SLII user
            $query = $this->model->where('slii',1);
        }else{
            $query = $this->model->where('slii',0);
        }
        return $query->get();

    }


}
