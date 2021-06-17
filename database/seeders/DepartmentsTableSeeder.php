<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
        "department" => "Marketing",
      ]);
      DB::table('departments')->insert([
        "department" => "Controlling",
      ]);
      DB::table('departments')->insert([
        "department" => "IT",
      ]);
    }
}
