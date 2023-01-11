<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Group_level_enSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_level_ens')->insert([
            ['name' => '1-kurs'],
            ['name' => '2-kurs'],
            ['name' => '3-kurs'],
            ['name' => '4-kurs'],
            ['name' => '1-magistratura'],
            ['name' => '2-magistratura']
        ]);
    }
}
