<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Yearly limit -> Hoe vaak een product per jaar best
      DB::table('rules')->insert([
        "description" => "Maximaal 1 per persoon. Goedkeuring van manager.",
        "total_limit" => 1,
      ]);

      DB::table('rules')->insert([
        "description" => "Maximaal 10 per jaar.",
        "yearly_limit" => 10,
      ]);

      DB::table('rules')->insert([
        "description" => "Maximaal 1 per jaar.",
        "total_limit" => 1,
      ]);

      DB::table('rules')->insert([
        "description" => "Maximaal 1 per jaar zonder goedkeuring.",
        "yearly_limit" => 1,
      ]);
    }
}