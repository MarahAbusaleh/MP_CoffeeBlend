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
                'id' => '11',
                'name' => 'Admin2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
                'image' => 'assets/images/defaultImage.png'
            ],
            [
                'id' => '12',
                'name' => 'Admin3',
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
                'image' => 'assets/images/defaultImage.png'
            ],
            [
                'id' => '13',
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
                'image' => 'assets/images/defaultImage.png'
            ],
            [
                'id' => '14',
                'name' => 'Leena Al-Rababeh',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
                'image' => 'images/leena.jpg'
            ],
            [
                'id' => '15',
                'name' => 'Rania Taha',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
                'image' => 'images/rania.jpg'
            ],
            [
                'id' => '16',
                'name' => 'Razan Al-Rjoub',
                'email' => 'user4@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
                'image' => 'images/razan.jpg'
            ],
            [
                'id' => '17',
                'name' => 'Rama Ababneh',
                'email' => 'user5@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
                'image' => 'images/rama.jpg'
            ],

        ]);
    }
}
