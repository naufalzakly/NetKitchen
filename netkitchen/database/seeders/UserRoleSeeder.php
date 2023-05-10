<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // buat user
        $users = ['naufal', 'customer1'];

        foreach ($users as $key => $value) {
            User::updateOrCreate([
                'id' => $key + 1
            ],[
                'name' => $value,
                'email' => $value.'@mail.com',
                'password' => bcrypt('123'),
            ]);
        }

        // bikin user role
        UserRole::updateOrCreate([
            'id' => 1
        ],[
            'user_id' => 1,
            'role_id' => 1
        ]);

        UserRole::updateOrCreate([
            'id' => 2
        ],[
            'user_id' => 2,
            'role_id' => 2
        ]);
        
    }
}
