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
        "password" => bcrypt("ipmedt4-groep6"),
        "house_number" => "45",
        "postal_code" => "2402DD",
        "department" => "Marketing",
        "img_alt" => "Foto van Jasmin Engels",
        "img_path" => "/users_img/personeel_1.jpg",
      ]);

      DB::table('users')->insert([
        "first_name" => "Martin",
        "last_name" => "Hakken",
        "address" => "Keizerstraat",
        "email" => "test.martin@jungheinrich.nl",
        "password" => bcrypt("ipmedt4-groep6"),
        "house_number" => "19",
        "postal_code" => "2020EF",
        "department" => "Controlling",
        "img_alt" => "Foto van Martin Hakken",
        "img_path" => "/users_img/personeel_2.jpg",
      ]);

      DB::table('users')->insert([
        "first_name" => "Lucie",
        "last_name" => "Kuipers",
        "address" => "Henry dunant straat",
        "email" => "test.lucie@jungheinrich.nl",
        "password" => bcrypt("ipmedt4-groep6"),
        "house_number" => "212",
        "postal_code" => "2422CF",
        "department" => "IT",
        "img_alt" => "Foto van Lucie Kuipers",
        "img_path" => "/users_img/personeel_3.jpg",
      ]);
      
      DB::table('users')->insert([
        "first_name" => "Herman",
        "last_name" => "Kort",
        "insertion" => "van",
        "address" => "Stationstraat",
        "email" => "test.herman@jungheinrich.nl",
        "password" => bcrypt("ipmedt4-groep6"),
        "house_number" => "44",
        "postal_code" => "1234GF",
        "role" => "Manager",
        "department" => "IT",
        "img_alt" => "Foto van Herman Kort",
        "img_path" => "/users_img/personeel_4.jpg",
      ]);
    }
}
