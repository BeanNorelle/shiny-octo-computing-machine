<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert([
            'name' => 'Fin',
            'class' => 'Knight',
            'image_url' => 'https://th.bing.com/th/id/OIG.TOLRKZ8qL7zw0CYHDGgD?pid=ImgGn',
            'level' => 10,
        ]);
        DB::table('characters')->insert([
            'name' => 'PB',
            'class' => 'Alchemist',
            'image_url' => 'https://th.bing.com/th/id/OIG._weSeNvrW03PPp0bGru5?pid=ImgGn',
            'level' => 90,
        ]);
    }
}
