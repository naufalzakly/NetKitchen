<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['superadmin','customer'];
        foreach ($roles as $key => $item) {
            $role = Role::updateOrCreate([
                'id' => $key + 1
                ],[
                    'name' => $item
                ]);
            }
    }
 }
