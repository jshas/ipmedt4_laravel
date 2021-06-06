<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        "first_name" => "Jasmin",
        "last_name" => "Engels",
        "address" => "Lange jan straat",
        "email" => "test.jasmin@jungheinrich.nl",
        "password" => "ipmedt4-groep6",
        "house_number" => "45",
        "postal_code" => "2402DD",
        "department" => "Marketing",
      ]);
      DB::table('users')->insert([
        "first_name" => "Martin",
        "last_name" => "Hakken",
        "address" => "Keizerstraat",
        "email" => "test.martin@jungheinrich.nl",
        "password" => "ipmedt4-groep6",
        "house_number" => "19",
        "postal_code" => "2020EF",
        "department" => "Controlling",
      ]);
      DB::table('users')->insert([
        "first_name" => "Lucie",
        "last_name" => "Kuipers",
        "address" => "Henry dunant straat",
        "email" => "test.lucie@jungheinrich.nl",
        "password" => "ipmedt4-groep6",
        "house_number" => "212",
        "postal_code" => "2422CF",
        "department" => "IT",
      ]);
      DB::table('users')->insert([
        "first_name" => "Herman",
        "last_name" => "Kort",
        "insertion" => "van",
        "address" => "Stationstraat",
        "email" => "test.herman@jungheinrich.nl",
        "password" => "ipmedt4-groep6",
        "house_number" => "44",
        "postal_code" => "1234GF",
        "Role" => "Manager",
        "department" => "IT",
      ]);
    }
}
