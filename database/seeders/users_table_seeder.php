<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class users_table_seeder extends Seeder
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
        "house_number" => "45",
        "postal_code" => "2402DD",
        "department" => "Marketing",
      ]);
      DB::table('users')->insert([
        "first_name" => "Martin",
        "last_name" => "Hakken",
        "address" => "Keizerstraat",
        "house_number" => "19",
        "postal_code" => "2020EF",
        "department" => "Controlling",
      ]);
      DB::table('users')->insert([
        "first_name" => "Lucie",
        "last_name" => "Kuipers",
        "address" => "Henry dunant straat",
        "house_number" => "212",
        "postal_code" => "2422CF",
        "department" => "IT",
      ]);
      DB::table('users')->insert([
        "first_name" => "Herman",
        "last_name" => "Kort",
        "insertion" => "van",
        "address" => "Stationstraat",
        "house_number" => "44",
        "postal_code" => "1234GF",
        "Role" => "Manager",
        "department" => "IT",
      ]);
    }
}
