<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Quiz_variant_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quiz_variant_types')->insert([
            ['name' => 'A B C D E F G H I '],
            ['name' => '1 2 3 4 5 6 7 8 9'],
            ['name' => 'I II III IV V VI VI VII VIII IX']
        ]);
    }
}
