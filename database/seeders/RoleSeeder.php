<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name' => "Admin",
            'guard_name' => 'web',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')]);

        $role->givePermissionTo(['dashboard','post','comment','view','approve']);


        $role = Role::create([
            'name' => "Forum User",
            'guard_name' => 'web',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')]);

        $role->givePermissionTo(['dashboard','post','comment','view','remove']);

      
    }
}
