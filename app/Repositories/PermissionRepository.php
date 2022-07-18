<?php

namespace App\Repositories;

use App\Models\Permission;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

/**
 * Class UserRepository.
 */
class PermissionRepository extends BaseRepository
{
    /**
     * UserRepository constructor.
     *
     * @param  Permission  $model
     */
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function permissionList()
    {
        $query =  $this->model->where('name', '!=','dashboard');
        return $query->get()->toArray();
    }



}
