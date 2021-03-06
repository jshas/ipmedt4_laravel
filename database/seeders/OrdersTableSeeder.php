<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OrdersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('orders')->insert([
            "user_id" => 3,
            "product_id" => 2,
            "quantity" => 1,
            "price" => 4100, 
            "status" => 'closed',
        ]);

        DB::table('orders')->insert([
            'user_id' => 3,
            'product_id' => 10,
            'price' => 100,
            'created_at' => '2021-06-12 11:00:00',
        ]);

        DB::table('orders')->insert([
            'user_id' => 3,
            'product_id' => 5,
            'price' => 100,
            'created_at' => '2021-06-10 11:00:00',
        ]);

        DB::table('orders')->insert([
            'user_id' => 3,
            'product_id' => 5,
            'price' => 100,
            'created_at' => '2020-06-10 11:00:00',
            'created_year' => '2020',
        ]);
    }
}
