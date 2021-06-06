<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          "name" => "Headset",
          "brand" => "Poly",
          "model" => "B825-m",
          "category"=> "",
          "sub-category" => "",
          "price" => "216",
          "description"=> "",
        ]);
        DB::table('products')->insert([
          "name" => "Voetensteun",
          "brand" => "Fellowes",
          "model" => "159719",
          "price" => "41",
          "description"=>"",
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
