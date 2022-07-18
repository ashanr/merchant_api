<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([

            // COMMON
            [
                'name' => "dashboard",
                'description' => 'Dashboard',
                'guard_name' => 'web',            
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "user_mgt",
                'description' => 'User Management',
                'guard_name' => 'web',            
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "role_mgt",
                'description' => 'Role Management',
                'guard_name' => 'web',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "post",
                'description' => 'Post as a Forum User',
                'guard_name' => 'web',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "comment",
                'description' => 'Comment On Post',
                'guard_name' => 'web',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "view",
                'description' => 'View Post',
                'guard_name' => 'web',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "approve",
                'description' => 'Approve Forum Post',
                'guard_name' => 'web',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "remove",
                'description' => 'Remove Forum Post',
                'guard_name' => 'web',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
