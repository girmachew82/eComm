<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
                'name'=>'Laptop2',
                'price'=>'45522',
                'category'=>'Laptop',
                'discription'=>'The new blanded laptop of Dell company',
                'gallery'=>'images/Laptop2.jpg'
            ],
            [
                'name'=>'Laptop3',
                'price'=>'895412',
                'category'=>'Laptop',
                'discription'=>'The new blanded laptop of MacBook company',
                'gallery'=>'images/Laptop3.jpg'
            ],
            [
                'name'=>'mP1',
                'price'=>'56231',
                'category'=>'Mobile',
                'discription'=>'The new blanded mobile phone of Samsung company',
                'gallery'=>'images/mP1.jpg'
            ],
            [
                'name'=>'mp2',
                'price'=>'65412',
                'category'=>'Mobile',
                'discription'=>'The new blanded mobile of Hiwawie company',
                'gallery'=>'images/mp2.jpg'
            ],
            [
                'name'=>'mp3',
                'price'=>'7458',
                'category'=>'Mobile',
                'discription'=>'The new blanded mobile of Apple company',
                'gallery'=>'images/mp3.jpg'
            ],
            [
                'name'=>'mp4',
                'price'=>'94561',
                'category'=>'Mobile',
                'discription'=>'The new blanded mobile of Samsung company',
                'gallery'=>'images/mp4.jpg'
            ],
            [
                'name'=>'SamrtTv3',
                'price'=>'7851245',
                'category'=>'TV',
                'discription'=>'The new blanded TV of HP company',
                'gallery'=>'images/SamrtTv3.jpg'
            ],
            [
                'name'=>'SMartTV',
                'price'=>'9874561',
                'category'=>'TV',
                'discription'=>'The new blanded TV of HP company',
                'gallery'=>'images/SMartTV.jpg'
            ],
            [
                'name'=>'SmartTV2',
                'price'=>'111235',
                'category'=>'TV',
                'discription'=>'The new blanded TV of HP company',
                'gallery'=>'images/SmartTV2.jpg'
            ],
            [
                'name'=>'SmartTv4',
                'price'=>'122345',
                'category'=>'TV',
                'discription'=>'The new blanded TV of HP company',
                'gallery'=>'images/SmartTv4.jpg'
            ],
            [
                'name'=>'Tab1',
                'price'=>'455222',
                'category'=>'Tablet',
                'discription'=>'The new blanded Tab of HP company',
                'gallery'=>'images/Tab1.jpg'
            ],
            [
                'name'=>'tab2',
                'price'=>'54123',
                'category'=>'Tablet',
                'discription'=>'The new blanded Tab of HP company',
                'gallery'=>'images/tab2.jpg'
            ]

        ]);
    }
}
