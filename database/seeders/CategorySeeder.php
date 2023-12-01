<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'COFFEE BEANS',
                'image1' => 'images/coffeebeans1.png',
            ],
            [
                'name' => 'MACHINES',
                'image1' => 'images/machiens1.png',
            ],
            [
                'name' => 'CUPS & MUGS',
                'image1' => 'images/cup1.png',
            ],
            [
                'name' => 'EQUIPMENT',
                'image1' => 'images/eq1.png',
            ],
        ]);
    }
}
