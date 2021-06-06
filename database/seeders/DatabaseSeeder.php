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
        $this->call([
            RolesTableSeeder::class,
            DepartmentsTableSeeder::class,
            UsersTableSeeder::class,
            RulesTableSeeder::class,
            CategoryTableSeeder::class,
            SubCategoryTableSeeder::class,
            ProductsTableSeeder::class,
        ]);
    }
}
