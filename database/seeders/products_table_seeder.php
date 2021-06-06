<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class products_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$table->id();
        $table->string('name');
        $table->string('brand');
        $table->string('model');
        $table->integer('price');
        $table->string('description');
        $table->string('img_name');
        $table->string('img_path')->default('/uploads/placeholder.png');
        $table->string("category")->references('category')->on('category');
        $table->string("sub_category")->references('sub_category')->on('sub_category');
        $table->integer('limit')->default(1);
        $table->boolean('permission')->default(true);
        $table->integer('rule')->references('id')->on('rules');
        */
        DB::table('products')->insert([
          "name" => "Headset",
          "brand" => "Poly",
          "model" => "B825-m",
          "price" => "216",
        ]);
        DB::table('products')->insert([
          "name" => "Voetensteun",
          "brand" => "Fellowes",
          "model" => "159719",
          "price" => "41",
        ]);
        DB::table('products')->insert([
          "name" => "USB",
          "brand" => "X",
          "model" => "USB-A to USB-C 2.0 BLACK",
          "price" => "5,99",
          "permission" => false,
        ]);
        DB::table('products')->insert([
          "name" => "Cartridge",
          "brand" => "HP",
          "model" => "953XL",
          "price" => "24,99",
          "permission" => false,
        ]);
        DB::table('products')->insert([
          "name" => "Cartridge",
          "brand" => "HP",
          "model" => "301XL",
          "price" => "24,99",
          "permission" => false,
        ]);
        DB::table('products')->insert([
          "name" => "Printer",
          "brand" => "HP",
          "model" => "Officejet 6950",
          "price" => "99,99",
        ]);
        DB::table('products')->insert([
          "name" => "Beeldscherm",
          "brand" => "HP",
          "model" => "Elitedisplay 24",
          "price" => "129,99",
          "permission" => false,
        ]);
        DB::table('products')->insert([
          "name" => "Muis",
          "brand" => "Logitech",
          "model" => "MX Master 3",
          "price" => "89,99",
        ]);
        DB::table('products')->insert([
          "name" => "Muis",
          "brand" => "HP",
          "model" => "200",
          "price" => "22,99",
          "permission" => false,
        ]);
        DB::table('products')->insert([
          "name" => "Toetsenbord",
          "brand" => "HP",
          "model" => "450",
          "price" => "24,99",
          "permission" => false,
        ]);
        DB::table('products')->insert([
          "name" => "Bureau",
          "price" => "400",
        ]);
    }
}
