<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cource_tip extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cources_tips')->insert([
            ['name' => 'Free'],
            ['name' => 'Premium'],
            ['name' => 'Kafedra']
        ]);
    }
}
