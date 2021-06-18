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
    }
}
