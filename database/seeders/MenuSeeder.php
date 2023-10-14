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
                'description' => 'Experience the pure and intense essence of turkish coffee',
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
                'name' => 'HOT CHOCOLATE',
                'description' => 'Indulge in the comforting and velvety richness of our',
                'type' => 'hot',
                'image' => 'images/hot_chocolate_coffee.jpg',
                'price' => '1'
            ],
            [
                'name' => 'MAROCCHINO COFFEE',
                'description' => 'Exquisite fusion of espresso, velvety cocoa, and frothy milk',
                'type' => 'hot',
                'image' => 'images/maccshino_coffee.jpg',
                'price' => '2.5'
            ],
            [
                'name' => 'MOCHA COFFEE',
                'description' => 'Coffee and chocolate are two of the best things in the world',
                'type' => 'hot',
                'image' => 'images/mocha_coffee.png',
                'price' => '2'
            ],
            [
                'name' => 'FLAT WHITE COFFEE',
                'description' => 'When the espresso and milk are mixed to make this joe',
                'type' => 'hot',
                'image' => 'images/flat_white_coffee.jpg',
                'price' => '2'
            ],
            [
                'name' => 'CAFE AU LAIT COFFEE',
                'description' => 'Cafe au lait is a coffee beverage that is made with dark',
                'type' => 'hot',
                'image' => 'images/cafe_au_latte_coffee.jpg',
                'price' => '2'
            ],
            [
                'name' => 'RED EYE COFFEE',
                'description' => 'Adding espresso shots to regular coffee creates this sign',
                'type' => 'hot',
                'image' => 'images/red_eye_coffee.jpg',
                'price' => '2'
            ],
            [
                'name' => 'RISTERTTO COFFEE',
                'description' => 'Ristretto is an espresso shot. It uses less hot water which',
                'type' => 'hot',
                'image' => 'images/Ristretto_coffee.png',
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
            [
                'name' => 'ICED LATTE COFFEE',
                'description' => 'Stay cool and refreshed with our smooth and invigorating',
                'type' => 'cold',
                'image' => 'images/iced_latte_coffee.jpeg',
                'price' => '1.5'
            ],
            [
                'name' => 'VANILLA ICED LATTE COFFEE',
                'description' => 'Indulge in the creamy sweetness of our vanilla-infused',
                'type' => 'cold',
                'image' => 'images/vanilla_iced_latte_coffee.jpg',
                'price' => '2'
            ],
            [
                'name' => 'CARAMEL ICED LATTE COFFEE',
                'description' => 'Experience pure indulgence with our caramel-infused iced',
                'type' => 'cold',
                'image' => 'images/caramel_iced_latte_coffee.jpg',
                'price' => '2'
            ],
            [
                'name' => 'ICED SPANISH LATTE COFFEE',
                'description' => 'Transport yourself to the streets of Spain with our iced Sp',
                'type' => 'cold',
                'image' => 'images/iced_spanish_latte_coffee.jpg',
                'price' => '2'
            ],
            [
                'name' => 'NITRO COFFEE',
                'description' => 'Nitro coffee is a type of cold coffee that is made by infusi',
                'type' => 'cold',
                'image' => 'images/Nitro_Coffee.png',
                'price' => '2.5'
            ],
            [
                'name' => 'CINNAMON CARAMEL CREAM COLD',
                'description' => 'Delight your senses with the perfect balance of cinnam',
                'type' => 'cold',
                'image' => 'images/Cinnamon_Caramel_Cream_Cold_Brew.png',
                'price' => '2'
            ],
            [
                'name' => 'SALTED CARAMEL CREAM COLD BREW',
                'description' => 'Indulge in the irresistible combination of smooth caramel',
                'type' => 'cold',
                'image' => 'images/Salted_Caramel_Cream_Cold_Brew.jpg',
                'price' => '2.5'
            ],
            [
                'name' => 'ICED AMERICANO COFFEE',
                'description' => 'Quench your thirst and awaken your senses with the bold',
                'type' => 'cold',
                'image' => 'images/Iced_Caffè_Americano.jpg',
                'price' => '1.5'
            ],
            [
                'name' => 'ICED CHOCOLATE ALMONDMILK SHAKEN ESPRESSO',
                'description' => 'Indulge in the irresistible combination of rich chocolate',
                'type' => 'cold',
                'image' => 'images/Iced_Chocolate_Almondmilk_Shaken_Espresso.jpg',
                'price' => '2.5'
            ],
        ]);
    }
}
