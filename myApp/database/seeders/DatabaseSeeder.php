<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('characters')->insert([
            'name' => 'Jake',
            'class' => 'Warrior',
            'image_url' => 'https://th.bing.com/th/id/OIG.pTw.ptymPTZONzpyEdAB?pid=ImgGn',
            'level' => 10,
        ]);
        DB::table('characters')->insert([
            'name' => 'Simon',
            'class' => 'Mage',
            'image_url' => 'https://th.bing.com/th/id/OIG.B_mvS5t5nU7PX38nqnb4?pid=ImgGn',
            'level' => 90,
        ]);

        DB::table('users')->insert([
            'name' => 'bean',
            'email' => 'bean@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
