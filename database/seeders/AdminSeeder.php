<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
           "name" => "Admin Sioktig",
           "level" => "admin",
           "email" => "admin@gmail.com",
           "password" => bcrypt("admin123"),
           "remember_token" => Str::random(60)
        ]);
    }
}