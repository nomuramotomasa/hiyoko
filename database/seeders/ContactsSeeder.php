<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //DBファサード

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //モデルは単数形
        //テーブル名は複数形
        //Laravelが判断し、モデルとマイグレーションを紐づける
        DB::table('contacts')->insert([
            [
                'name' => '野村',
                'email' => 'test@test.com',
                'gender' => 0,
                'age' => 20,
                'message' => 'テスト1',
            ],
            [
                'name' => 'ツナ丸',
                'email' =>'tuna@tuna.com',
                'gender' => '1',
                'age' => 17,
                'message' => '家の愛犬',
            ],
            [
                'name' => 'オクラ',
                'email' => 'okura@okura.com',
                'gender' => 2,
                'age' => 25,
                'message' => 'ゲーム実況者',
            ],

        ]);
    }
}
