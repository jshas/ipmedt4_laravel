<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class roles_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('roles')->insert([
        "role" => "Gebruikers",
      ]);
      \DB::table('roles')->insert([
        "role" => "Manager"
      ])
    }
}
