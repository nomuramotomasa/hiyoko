<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => '野村',
                'email' => 'test@test.com',
                'password' => Hash::make('tuna2700')
            ],


            // [
            //     'name' => 'coffe1',
            //     'prefecture' => '東京都',
            //     'address' => '品川区',
            //     'review' => '3.0',
            //     'is_visible' => 'true',
            // ],
            // [
            //     'name' => 'coffe2',
            //     'prefecture' => '東京都',
            //     'address' => '世田谷区',
            //     'review' => '5.0',
            //     'is_visible' => 'true',
            // ],
            // [
            //     'name' => 'coffe3',
            //     'prefecture' => '東京都',
            //     'address' => '新宿区',
            //     'review' => '1.5',
            //     'is_visible' => 'false',
            // ],
        ]);
    }
}
