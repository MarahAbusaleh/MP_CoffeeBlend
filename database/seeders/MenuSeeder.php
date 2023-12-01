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
                'description' => 'Transport your taste buds to the heart of Istanbul with our Turkish Coffee at CoffeeBlen.
                                    Served in a traditional cezve, this dark-roasted Arabica blend offers a robust and rich flavor experience. 
                                    Crafted with precision, our Turkish Coffee is a celebration of cultural heritage in every cup. 
                                    Experience the art and essence of Turkish coffee-making with us.',
                'type' => 'hot',
                'image' => 'images/black_coffee.jpg',
                'price' => '2.5'
            ],
            [
                'name' => 'ESPRESSO COFFEE',
                'description' => 'Indulge in the rich symphony of flavors with our Espresso Coffee at CoffeeBlen. 
                                    Savor the bold intensity and velvety texture of finely ground beans, expertly brewed to perfection. 
                                    This espresso captivates with its robust aroma, delivering a powerful kick of caffeine for an energizing experience. 
                                    Immerse yourself in the essence of Italian craftsmanship, as each sip embodies a harmonious blend of strength and sophistication. ',
                'type' => 'hot',
                'image' => 'images/espresso_coffee.jpg',
                'price' => '3'
            ],
            [
                'name' => 'AMERICANO COFFEE',
                'description' => '"Elevate your coffee experience with our exquisite Americano blend at CoffeeBlen. Immerse yourself in a bold and robust flavor profile, expertly crafted from finely ground espresso beans and hot water. Savor the perfect balance of strength and smoothness in every sip. Indulge in a rich, full-bodied aroma that awakens your senses.',
                'type' => 'hot',
                'image' => 'images/americano_coffee.jpg',
                'price' => '2.5'
            ],
            [
                'name' => 'CAPPUCCINO COFFEE',
                'description' => 'Indulge in the rich harmony of our Cappuccino Coffee, a meticulously crafted blend of bold espresso, velvety steamed milk, and a frothy crown of microfoam.',
                'type' => 'hot',
                'image' => 'images/cappuccino_coffee.jpg',
                'price' => '2.5'
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
                'name' => 'ICED COFFEE',
                'description' => 'Indulge in the invigorating allure of our ICED COFFEE at CoffeeBlen. Immerse your senses in a harmonious blend of robust cold-brewed coffee, meticulously crafted for a smooth and refreshing experience. Our premium coffee beans are expertly selected to deliver a rich flavor profile with subtle hints of caramel and a hint of nuttiness. Served over ice, this chilled delight is the perfect companion for warm days or those seeking a delightful pick-me-up. Elevate your coffee journey with CoffeeBlen\'s ICED COFFEE—a sip of pure satisfaction, redefining your coffee experience. Explore the cool side of coffee perfection today!',
                'type' => 'cold',
                'image' => 'images/iced_coffee.jpg',
                'price' => '1'
            ],
            [
                'name' => 'HAZELNUT ICED LATTE COFFEE',
                'description' => 'Indulge in the exquisite blend of rich espresso and velvety hazelnut notes with our Hazelnut Iced Latte. Crafted to perfection, this refreshing coffee creation at CoffeeBlen delivers a delightful symphony of robust coffee flavors and the sweet, nutty essence of hazelnuts. The chilled perfection of our Hazelnut Iced Latte is a tantalizing treat for coffee enthusiasts seeking a harmonious balance of warmth and coolness. Sip into satisfaction with every refreshing gulp, as the invigorating iced latte captivates your taste buds. Elevate your coffee experience with the irresistible fusion of premium ingredients, leaving you refreshed and invigorated. ',
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
        ]);
    }
}
