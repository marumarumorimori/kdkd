<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProimageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proimages')->insert([
            [
                'id' => 1,
                'image' => 'icon.png',
                'product_id' =>  1,
            ],
            [
                'id' => 2,
                'image' => 'icon.png',
                'product_id' =>  1,
            ],
            [
                'id' => 3,
                'image' => 'icon.png',
                'product_id' =>  1,
            ],
            [
                'id' => 4,
                'image' => 'icon.png',
                'product_id' =>  2,
            ],
            [
                'id' => 5,
                'image' => 'icon.png',
                'product_id' =>  2,
            ],
            [
                'id' => 6,
                'image' => 'icon.png',
                'product_id' =>  2,
            ],
            [
                'id' => 7,
                'image' => 'icon.png',
                'product_id' =>  3,
            ],
            [
                'id' => 8,
                'image' => 'icon.png',
                'product_id' =>  3,
            ],
            [
                'id' => 9,
                'image' => 'icon.png',
                'product_id' =>  3,
            ],
        ]);
    }
}
