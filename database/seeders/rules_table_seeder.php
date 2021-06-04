<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class rules_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('rules')->insert([
        "description" => "Maximaal 1 per persoon. Goedkeuring van manager",
      ]);
      \DB::table('rules')->insert([
        "description" => "Maximaal 10 per jaar",
      ]);
      \DB::table('rules')->insert([
        "description" => "Maximaal 1 per jaar",
      ]);
      \DB::table('rules')->insert([
        "description" => "Maximaal 1 per jaar zonder goedkeuring",
      ]);
    }
}
