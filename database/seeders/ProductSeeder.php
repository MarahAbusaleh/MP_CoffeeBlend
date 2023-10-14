<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([
            // COFFEE BEANS Category
            [
                'name' => 'Dark Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Dark_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Brown Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Brown_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Dark Brown Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Dark_Brown_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Light Brown Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Light_Brown_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Green Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Green_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Our Special Mix Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Our_Special_Mix_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            // MACHINES Category
            [
                'name' => 'American Coffee Machine',
                'description' => 'Experience the perfect balance of convenience and flavor with our American 5-cup coffeemaker, delivering rich and aromatic coffee with every brew.',
                'image' => 'images/machien1.png',
                'price' => '25',
                'category_id' => '2'
            ],
            [
                'name' => 'Turkish Coffee Machine',
                'description' => 'Experience the fusion of modern convenience and authentic taste Automatic Turkish Coffee Maker, crafting 5 cups of rich delight in Black/Copper.',
                'image' => 'images/machien2.png',
                'price' => '50',
                'category_id' => '2'
            ],
            [
                'name' => 'Coffee Espresso and Cappuccino Machine',
                'description' => 'Indulge in barista-quality espressos and cappuccinos with the Mr. Coffee Espresso and Cappuccino Machine.',
                'image' => 'images/machien3.png',
                'price' => '90',
                'category_id' => '2'
            ],
            // CUPS & MUGS Category
            [
                'name' => 'Earthen Pottery Mug',
                'description' => 'Sip serenity from an Earthen Pottery Mug, connecting you with rustic elegance.',
                'image' => 'images/cup1.jpeg',
                'price' => '6',
                'category_id' => '3'
            ],
            [
                'name' => 'Marble Mug',
                'description' => 'Elevate your sipping experience with the elegance of a Marble Cup.',
                'image' => 'images/cup2.jpeg',
                'price' => '6',
                'category_id' => '3'
            ],
            [
                'name' => 'Blue Ceramic Cup and Saucer',
                'description' => 'Experience elegance in every sip with our exquisite ceramic cup and saucer set.',
                'image' => 'images/cup3.jpeg',
                'price' => '8',
                'category_id' => '3'
            ],
            [
                'name' => 'Candle Mug',
                'description' => 'Infuse warmth and ambiance into your surroundings with our captivating candle.',
                'image' => 'images/cup4.jpeg',
                'price' => '6',
                'category_id' => '3'
            ],
            [
                'name' => 'Rotary Mug',
                'description' => 'Discover innovation in motion with our rotary cup, designed in modern style.',
                'image' => 'images/cup5.jpeg',
                'price' => '7',
                'category_id' => '3'
            ],
            [
                'name' => 'Beige Ceramic Cup and Saucer',
                'description' => 'Crafted with exquisite attention to detail, our ceramic cup seamlessly combines.',
                'image' => 'images/cup6.jpeg',
                'price' => '8',
                'category_id' => '3'
            ],
            // EQUIPMENT Category
            [
                'name' => 'Storage Drawer Holder for Capsules',
                'description' => 'Organize your Nespresso OriginalLine capsules in style with the DecoBros Crystal Tempered Glass Storage Drawer Holder, combining.',
                'image' => 'images/eqq1.png',
                'price' => '15',
                'category_id' => '4'
            ],
            [
                'name' => 'Black Espresso Steaming Pitcher',
                'description' => 'Achieve barista-level perfection with the Apexstone 20 oz Black Espresso Steaming Pitcher, designed for expert milk frothing and frothing.',
                'image' => 'images/eqq2.png',
                'price' => '8',
                'category_id' => '4'
            ],
            [
                'name' => 'Disposable Coffee Paper',
                'description' => 'Simplify your brewing routine with Disposable Coffee Paper Filters, ensuring a smooth and mess-free coffee experience every time.',
                'image' => 'images/eqq3.png',
                'price' => '5',
                'category_id' => '4'
            ],
            [
                'name' => 'Coffee Capsule',
                'description' => 'Indulge in the rich harmony of flavors with Nescafé Dolce Gusto Cortado Espresso Macchiato Coffee Capsules, a fusion of espresso.',
                'image' => 'images/eqq4.png',
                'price' => '20',
                'category_id' => '4'
            ],
            [
                'name' => 'Coffee Mat',
                'description' => 'Elevate your coffee setup and keep your space tidy with a Coffee Mat, designed to add functionality and style to your brewing station.',
                'image' => 'images/eqq5.png',
                'price' => '8',
                'category_id' => '4'
            ],


        ]);
    }
}
