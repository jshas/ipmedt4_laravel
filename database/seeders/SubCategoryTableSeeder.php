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

        DB::insert([
            "sub-category" => "Beeldscherm",
        ]);
        DB::insert([
            "sub-category" => "Bureau",
        ]);
        DB::insert([
            "sub-category" => "Cartridge",
        ]);
        DB::insert([
            "sub-category" => "Headset",
        ]);
        DB::insert([
            "sub-category" => "Muis",
        ]);
        DB::insert([
            "sub-category" => "Printer",
        ]);
        DB::insert([
            "sub-category" => "Toetsenbord",
        ]);
        DB::insert([
            "sub-category" => "USB",
        ]);
        DB::insert([
            "sub-category" => "Voetensteun",
        ]);
    }
}
