<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Lesson_top_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lesson_top_types')->insert([
            ['name' => 'video'],
            ['name' => 'link'],
            ['name' => 'lesson'],
            ['name' => 'document'],
            ['name' => 'pdf'],
            ['name' => 'exe'],
            ['name' => 'kitob'],
            ['name' => 'download fayl'],
            ['name' => 'quiz']
        ]);
    }
}
