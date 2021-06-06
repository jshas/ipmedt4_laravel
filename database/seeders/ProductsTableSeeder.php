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
          "brand" => "Poly",
          "model" => "B825-m",
          "category"=> "Communicatie",
          "sub_category" => "Headset",
          "price" => 21600,
          "description"=> "Een draadloze bluetooth headset gelijk aan het model op kantoor.",
        ]);

        DB::table('products')->insert([
          "brand" => "Fellowes",
          "model" => "159719",
          "category" => "Ergonomie",
          "sub_category" => "Voetensteun",
          "price" => 4100,
          "description"=>"Een voetensteun die de voet- en beenpositie bevorderd.",
          "rule" => 1,
        ]);
        DB::table('products')->insert([
          "brand" => "X",
          "model" => "USB-A to USB-C 2.0 BLACK",
          "category" => "Kabel",
          "sub_category" => "USB",
          "price" => 599,
          "description"=>"Een 2 meter lange USB-A (male) naar USB-C (male) kabel.",
          "permission" => false,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "953XL Zwart",
          "category" => "Print",
          "sub_category" => "Cartridge",
          "price" => 2499,
          "description"=> "Een zwarte inktcartridge. Geschikt voor 2000 prints.",
          "permission" => false,
          "rule" => 2,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "953XL Kleur",
          "category" => "Print",
          "sub_category" => "Cartridge",
          "price" => 2499,
          "description"=> "Een originele HP 953XL kleur inktcartridge set. Bevat 3 cartridges met de kleuren rood, geel en cyaan. Geschikt voor 2000 prints.",
          "permission" => false,
          "rule" => 2,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "301XL zwart",
          "category" => "Print",
          "sub_category" => "Cartridge",
          "price" => 2499,
          "description"=> "Een originele HP inktcartridge. Geschikt voor 2000 prints.",
          "permission" => false,
          "rule" => 2,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "301XL Kleur",
          "category" => "Print",
          "sub_category" => "Cartridge",
          "price" => 2499,
          "description"=> "Een originele HP 301XL kleur inktcartridge set. Bevat 3 cartridges met de kleuren rood, geel en cyaan. Geschikt voor 2000 prints.",
          "permission" => false,
          "rule" => 2,
        ]);
        
        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "Officejet 6950",
          "category" => "Print",
          "sub_category" => "Printer",
          "price" => 9999,
          "description"=> "Een all-in-one printer met scan mogelijkheden. Compatibel met 903(XL) cartridges.",
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "Elitedisplay 24",
          "category" => "Randapparatuur",
          "sub_category" => "Beeldscherm",
          "price" => 12999,
          "description"=> "Een 24 inch full-HD (1920 x 1080) beeldscherm met een in hoogte verstelbare voet en draaibaar- en kantelbaar scherm.",
          "permission" => false,
          "rule" => 4,
        ]);

        DB::table('products')->insert([

          "brand" => "Logitech",
          "model" => "MX Master 3",
          "category" => "Randapparatuur",
          "sub_category" => "Muis",
          "price" => 8999,
          "description"=> "Draadloze muis met een ergonomische grip (rechtshandig), een duimscroll wheel en 2 vrij instelbare knoppen.",
          "rule" => 3,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "200",
          "category" => "Randapparatuur",
          "sub_category" => "Muis",
          "price" => 2299,
          "description"=> "Een kleine draadloze muis geschikt voor links- en rechtshandigen. Ideaal voor onderweg.",
          "permission" => false,
          "rule" => 3,

        ]);

        DB::table('products')->insert([

          "brand" => "HP",
          "model" => "450",
          "category" => "Randapparatuur",
          "sub_category" => "Toetsenbord",
          "price" => 2499,
          "description"=> "Een strak toetsenbord zonder omranding. Heeft minimale reisafstand per toetsindruk. Dit voorkomt vingerverkrampingen tijdens het typen.",
          "permission" => false,
          "rule" => 3,

        ]);
        DB::table('products')->insert([
          "brand" => "Merkloos",
          "model" => "Mk. 1", 
          "category" => "Werkplek",
          "sub_category" => "Bureau",
          "price" => 40000,
          "description"=> "Een verstelbaar bureau om ergonomisch te werken zoals je op kantoor gewend bent.",
        ]);
    }
}
