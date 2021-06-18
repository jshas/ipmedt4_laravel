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

    // $table->id();
    // $table->unsignedBigInteger('user_id')->references('id')->on('users');
    // $table->unsignedBigInteger('product_id')->references('id')->on('products');
    // $table->integer('price')->references('price')->on('products');
    // $table->integer('quantity')->default(1);
    // $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
    // $table->year("created_year")->default(Carbon::now()->year);
    // $table->string('status')->references('status')->on('status')->default('open');
    public function run()
    {
        DB::table('orders')->insert([
            "user_id" => 1,
            "product_id" => 2,
            "quantity" => 1,
            "price" => 4100, 
            "status" => 'closed',
        ]);

        DB::table('orders')->insert([
            'user_id' => 1,
            'product_id' => 10,
            'price' => 100,
            'created_at' => '2021-06-12 11:00:00',
        ]);

        DB::table('orders')->insert([
            'user_id' => 2,
            'product_id' => 5,
            'price' => 100,
            'created_at' => '2021-06-10 11:00:00',
        ]);

        DB::table('orders')->insert([
            'user_id' => 2,
            'product_id' => 5,
            'price' => 100,
            'created_at' => '2020-06-10 11:00:00',
            'created_year' => '2020',
        ]);
        
    }
}
