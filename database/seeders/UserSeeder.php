<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
             "name"=> "poon",
             "password"=> md5("12345"),
             "email"=> "poon.sat3@gmail.com",
             "address"=> "tsu",
             "telephone"=> "0953534509"
            ],
            [
                "name"=> "poon1",
                "password"=> md5("12346"),
                "email"=> "poon1.sat3@gmail.com",
                "address"=> "tsu",
                "telephone"=> "0953534501"
               ],
               [
                "name"=> "poon2",
                "password"=> md5("12347"),
                "email"=> "poon2.sat3@gmail.com",
                "address"=> "tsu",
                "telephone"=> "0953534502"
               ],
        ]);
    }
}
