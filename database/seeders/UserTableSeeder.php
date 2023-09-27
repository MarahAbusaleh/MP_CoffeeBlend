<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active'
            ],
            [
                'name' => 'Admin3',
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active'
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active'
            ],

        ]);
    }
}
