<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Group_langs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RollSeeder::class,
            LangSeeder::class,
            Group_level_enSeeder::class,
            Group_level_ruSeeder::class,
            Group_level_uzSeeder::class,
            Lesson_typeSeeder::class,
            Lesson_top_typeSeeder::class,
            Quiz_variant_typeSeeder::class,
        ]);

    }
}
