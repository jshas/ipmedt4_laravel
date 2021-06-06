<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SubCategoryTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sub_category')->insert([
            "sub_category" => "Beeldscherm",
        ]);
        DB::table('sub_category')->insert([
            "sub_category" => "Bureau",
        ]);
        DB::table('sub_category')->insert([
            "sub_category" => "Cartridge",
        ]);
        DB::table('sub_category')->insert([
            "sub_category" => "Headset",
        ]);
        DB::table('sub_category')->insert([
            "sub_category" => "Muis",
        ]);
        DB::table('sub_category')->insert([
            "sub_category" => "Printer",
        ]);
        DB::table('sub_category')->insert([
            "sub_category" => "Toetsenbord",
        ]);
        DB::table('sub_category')->insert([
            "sub_category" => "USB",
        ]);
        DB::table('sub_category')->insert([
            "sub_category" => "Voetensteun",
        ]);
    }
}
