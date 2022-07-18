<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
                [
                    'title' => "Mr.",
                    'first_name' => "Ashan",
                    'last_name' => "Rajapaksha",                 
                    'email' => "admin@admin.com",
                    'password' => Hash::make('12345678'),
                    'created_by' => 1,
                    'created_at' => date('Y-m-d H:i:s')
        ]);

        $user->assignRole('Admin');

     }
}
