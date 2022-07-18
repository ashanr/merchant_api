<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\PermissionRepository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;



class PermissionController extends Controller
{

    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    public function permissionlist(Request $request)
    {
        $roles =  $this->permissionRepository->permissionList();

        return response()->json(
            [
                'data' => $roles
            ],
            200
        );
    }

}
