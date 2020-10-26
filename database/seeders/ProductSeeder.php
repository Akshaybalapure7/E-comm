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
           'name'=>'LG Mobile',
           'price'=>'14000',
           'category'=>'Mobile',
           'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.91mobiles.com%2Flg-velvet-price-in-india&psig=AOvVaw2BZZuP2OiYyJf6keRPKFKu&ust=1603624189410000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJjw9eaLzewCFQAAAAAdAAAAABAJ',
           'description'=>'smartphone with 8GB Ram and 128GB internal and much more features '
        ],
        [
          'name'=>'Panosonic Fridge',
           'price'=>'75000',
           'category'=>'Fridge',
           'gallery'=>'https://images.unsplash.com/photo-1567581935884-3349723552ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80',
           'description'=>'Panasonic Stainless Steel 635L French Door Fridge '

        ],
        [
          'name'=>'Shinco LED TV',
           'price'=>'22000',
           'category'=>'TV',
           'gallery'=>'https://global.appmifile.com/webfile/globalimg/in/cms/A7442D32-F379-BD0A-4B22-A262258E2756.jpg ',
           'description'=>'Shinco S43UQLS 4k LED smart TV'
        ],
        [
          'name'=>'LG TV',
           'price'=>'29000',
           'category'=>'TV',
           'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fafrica%2Ftvs%2Flg-32LM550BPVA&psig=AOvVaw0dB4mQ2c5we8_eenTQD2-W&ust=1603623751798000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPjK85eKzewCFQAAAAAdAAAAABAV',
           'description'=>'LG LED TV 3 inch LM550B Series HD LED '

        ]


        ]);
    }
}
