<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['login' => 'student',"password"=>"12345678","roll_id"=>"1","email"=>"email@gmail.com","parol"=>"12345678",'is_active'=>"1","is_deleted"=>"0"],
            ['login' => 'teacher',"password"=>"12345678","roll_id"=>"2","email"=>"email1@gmail.com","parol"=>"12345678",'is_active'=>"1","is_deleted"=>"0"],
            ['login' => 'mudir',"password"=>"12345678","roll_id"=>"3","email"=>"email2@gmail.com","parol"=>"12345678",'is_active'=>"1","is_deleted"=>"0"],
            ['login' => 'dekanat',"password"=>"12345678","roll_id"=>"4","email"=>"email3@gmail.com","parol"=>"12345678",'is_active'=>"1","is_deleted"=>"0"],
            ['login' => 'admin',"password"=>"12345678","roll_id"=>"5","email"=>"email4@gmail.com","parol"=>"12345678",'is_active'=>"1","is_deleted"=>"0"],
            ['login' => 'superadmin',"password"=>"12345678","roll_id"=>"6","email"=>"email43@gmail.com","parol"=>"12345678",'is_active'=>"1","is_deleted"=>"0"]
        ]);

    }
}
