<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('rolls')->insert([
            ['name' => 'student'],
            ['name' => 'teacher'],
            ['name' => 'kafedra mudiri'],
            ['name' => 'dekanat'],
            ['name' => 'admin'],
            ['name' => 'superadmin']
        ]);

    }
}
