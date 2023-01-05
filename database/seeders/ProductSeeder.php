<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'id' => 1,
                'name' => 'OOの掲示板',
                'price' => 'web',
                'description' => 'web',
                'status' => 'web',
                'category_id' => 1,
                'judgment' => 'web',
                'user_id' => 1,

            ],
            [
                'id' => 2,
                'name' => 'OOの掲示板',
                'price' => 'web',
                'description' => 'web',
                'status' => 'web',
                'category_id' => 2,
                'judgment' => 'web',
                'user_id' => 1,

            ],
            [
                'id' => 3,
                'name' => 'OOの掲示板',
                'price' => 'web',
                'description' => 'web',
                'status' => 'web',
                'category_id' => 1,
                'judgment' => 'web',
                'user_id' => 2,

            ],
        ]);

    }
}
