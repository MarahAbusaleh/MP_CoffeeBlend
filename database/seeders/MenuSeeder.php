<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{

    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'TURKISH COFFEE',
                'description' => 'Experience the pure and intense essence of turkish coffee...',
                'type' => 'hot',
                'image' => 'images/black_coffee.jpg',
                'price' => '1'
            ],
            [
                'name' => 'ESPRESSO COFFEE',
                'description' => 'Savor the concentrated richness and velvety smoothness',
                'type' => 'hot',
                'image' => 'images/espresso_coffee.jpg',
                'price' => '2'
            ],
            [
                'name' => 'AMERICANO COFFEE',
                'description' => 'Indulge in the bold and balanced flavors of our expertly',
                'type' => 'hot',
                'image' => 'images/americano_coffee.jpg',
                'price' => '2.5'
            ],
            [
                'name' => 'CAPPUCCINO COFFEE',
                'description' => 'Cappuccinos are a popular Italian coffee drink made with',
                'type' => 'hot',
                'image' => 'images/cappuccino_coffee.jpg',
                'price' => '1.5'
            ],
            [
                'name' => 'LATTE COFFEE',
                'description' => 'A latte is an espresso with steamed milk and a dollop of',
                'type' => 'hot',
                'image' => 'images/latte_coffee.jpg',
                'price' => '1.5'
            ],
            [
                'name' => 'ICED COFFEE',
                'description' => 'Iced coffee is a type of cold coffee that is made by brew',
                'type' => 'cold',
                'image' => 'images/iced_coffee.jpg',
                'price' => '1'
            ],
            [
                'name' => 'HAZELNUT ICED LATTE COFFEE',
                'description' => 'Savor the perfect blend of creamy hazelnut and refreshing',
                'type' => 'cold',
                'image' => 'images/hazelnut_iced_latte_coffee.jpg',
                'price' => '2'
            ],
            // [
            //     'name' => 'images/black coffee.jpg',
            //     'description' => 'images/black coffee.jpg',
            //     'type' => 'images/black coffee.jpg',
            //     'image' => 'images/black coffee.jpg',
            //     'price' => 'images/black coffee.jpg'
            // ],
            // [
            //     'name' => 'images/black coffee.jpg',
            //     'description' => 'images/black coffee.jpg',
            //     'type' => 'images/black coffee.jpg',
            //     'image' => 'images/black coffee.jpg',
            //     'price' => 'images/black coffee.jpg'
            // ],
            // [
            //     'name' => 'images/black coffee.jpg',
            //     'description' => 'images/black coffee.jpg',
            //     'type' => 'images/black coffee.jpg',
            //     'image' => 'images/black coffee.jpg',
            //     'price' => 'images/black coffee.jpg'
            // ],
        ]);
    }
}
