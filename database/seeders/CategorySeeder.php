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
                'image2' => 'images/coffeebeans2.png',
                'image3' => 'images/coffeebeans3.png'
            ],
            [
                'name' => 'MACHINES',
                'image1' => 'images/machiens1.png',
                'image2' => 'images/machiens2.png',
                'image3' => 'images/machiens3.png'
            ],
            [
                'name' => 'CUPS & MUGS',
                'image1' => 'images/cup1.png',
                'image2' => 'images/cup2.png',
                'image3' => 'images/cup3.png'
            ],
            [
                'name' => 'EQUIPMENT',
                'image1' => 'images/eq1.png',
                'image2' => 'images/eq2.png',
                'image3' => 'images/eq3.png'
            ],
        ]);
    }
}
