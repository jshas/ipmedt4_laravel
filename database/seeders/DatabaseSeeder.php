<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $this->call(users_table_seeder::class);
          $this->call(products_table_seeder::class);
          $this->call(category_table_seeder::class);
          $this->call(departments_table_seeder::class);
          $this->call(roles_table_seeder::class);
          $this->call(rules_table_seeder::class);
    }
}
