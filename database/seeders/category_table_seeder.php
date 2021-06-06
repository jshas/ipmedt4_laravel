<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class category_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('category')->insert([
        "category" => "Communicatie",
      ]);
      DB::table('category')->insert([
        "category" => "Ergonomie",
      ]);
      DB::table('category')->insert([
        "category" => "Kabel",
      ]);
      DB::table('category')->insert([
        "category" => "Print",
      ]);
      DB::table('category')->insert([
        "category" => "Randapparatuur",
      ]);
      DB::table('category')->insert([
        "category" => "Werkplek",
      ]);
    }
}
