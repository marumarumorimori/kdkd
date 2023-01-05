<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'id' => 1,
                'body' => 'OOの掲示板',
                'subject' => 'web',
                'grade' => 1,
                'nickname' => '椎名',
                'user_id' => 1,
                'user_img' => 'icon.png',


            ],
            [
                'id' => 2,
                'body' => 'OOの掲示板',
                'subject' => 'web',
                'grade' => 1,
                'nickname' => '椎名',
                'user_id' => 2,
                'user_img' => 'icon.png',


            ],
            [
                'id' => 3,
                'body' => 'OOの掲示板',
                'subject' => 'web',
                'grade' => 3,
                'nickname' => '椎名',
                'user_id' => 3,
                'user_img' => 'icon.png',


            ],
        ]);
    }
}
