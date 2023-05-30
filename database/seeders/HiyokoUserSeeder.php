<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HiyokoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hiyoko_users')->insert([
            [
                'name' => '野村',
                'email' => 'motomasa@test1.com',
                'password' => Hash::make('password123'),
                'image' => 'テスト',
                'profile_id' => 'test1',
                'profile' => 'おはよう',
            ],
            [
                'name' => '小山',
                'email' => 'yushi@test2.com',
                'password' => Hash::make('password123'),
                'image' => 'テスト',
                'profile_id' => 'test2',
                'profile' => 'こんにちは',
            ],
            [
                'name' => '君和田',
                'email' => 'suzune@test3.com',
                'password' => Hash::make('password123'),
                'image' => 'テスト',
                'profile_id' => 'test3',
                'profile' => 'こんばんわ',
            ],
        ]);
    }
}
