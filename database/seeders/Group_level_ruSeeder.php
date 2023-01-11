<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Group_level_ruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_level_rus')->insert([
            ['name' => '1-курс'],
            ['name' => '2-курс'],
            ['name' => '3-курс'],
            ['name' => '4-курс'],
            ['name' => '1-курс магистратура'],
            ['name' => '2-курс магистратура']
        ]);
    }
}
