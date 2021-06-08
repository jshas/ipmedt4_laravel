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
          "price" => 21600,
          "category" => "Communicatie",
          "sub_category" => "Headset",
          "description"=> "Een draadloze bluetooth headset gelijk aan het model op kantoor.",
          "img_path" => "public/img/poly_b825m.png", 
          "img_alt" => "Een draadloze bluetooth headset met kleine oorschelpen en een microfoon.", 

        ]);

        DB::table('products')->insert([
          "brand" => "Fellowes",
          "model" => "159719",
          "price" => 4100,
          "category" => "Ergonomie",
          "sub_category" => "Voetensteun",
          "description"=>"Een voetensteun die de voet- en beenpositie bevorderd. Het oppervlakte heeft een anti-slip laag.",
          "img_path" => "public/img/fellowes_159719.png", 
          "img_alt" => "Een zwarte voetensteun met donkergrijze antislip stippen.",  
          "rule_id" => 1,
        ]);

        DB::table('products')->insert([
          "brand" => "X",
          "model" => "USB-A to USB-C 2.0 BLACK",
          "category" => "Kabel",
          "sub_category" => "USB",
          "price" => 599,
          "description"=>"Een 2 meter lange USB-A (male) naar USB-C (male) kabel.",
          "img_path" => "public/img/usb_a_to_c_black.png", 
          "img_alt" => "Zijaanicht van een USB kabel die de USB-A en USB-C aansluitingen weergeeft.", 
          "permission" => false,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "953XL Zwart",
          "category" => "Print",
          "sub_category" => "Cartridge",
          "price" => 2499,
          "description"=> "Een zwarte inktcartridge. Geschikt voor 2000 prints.",
          "img_path" => "public/img/hp_953XL_zwart.png", 
          "img_alt" => "Verpakking van de inktcartridge met opdruk en productdetails.",
          "permission" => false,
          "rule_id" => 2,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "953XL Kleur",
          "category" => "Print",
          "sub_category" => "Cartridge",
          "price" => 2499,
          "description"=> "Een originele HP 953XL kleur inktcartridge set. Bevat 3 cartridges met de kleuren rood, geel en cyaan. Geschikt voor 2000 prints.",
          "img_path" => "public/img/hp_953XL_kleur.png", 
          "img_alt" => "Verpakking van de inktcartridge met opdruk en productdetails.",
          "permission" => false,
          "rule_id" => 2,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "301XL zwart",
          "category" => "Print",
          "sub_category" => "Cartridge",
          "price" => 2499,
          "description"=> "Een originele HP inktcartridge. Geschikt voor 2000 prints.",
          "img_path" => "public/img/hp_301XL_zwart.png", 
          "img_alt" => "Verpakking van de inktcartridge met opdruk en productdetails.",          
          "permission" => false,
          "rule_id" => 2,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "301XL Kleur",
          "category" => "Print",
          "sub_category" => "Cartridge",
          "price" => 2499,
          "description"=> "Een originele HP 301XL kleur inktcartridge set. Bevat 3 cartridges met de kleuren rood, geel en cyaan. Geschikt voor 2000 prints.",
          "img_path" => "public/img/hp_301XL_kleur.png", 
          "img_alt" => "Verpakking van de inktcartridge met opdruk en productdetails.",
          "permission" => false,
          "rule_id" => 2,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "Officejet 6950",
          "category" => "Print",
          "sub_category" => "Printer",
          "price" => 9999,
          "description"=> "Een all-in-one printer met scan mogelijkheden en kopie mogelijkheden. Compatibel met 903(XL) cartridges.",
          "img_path" => "public/img/hp_officejet_6950.png", 
          "img_alt" => "Een zwarte printer met scan klep en inlaadplaats voor te kopiëeren documenten.",
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "Elitedisplay 24",
          "category" => "Randapparatuur",
          "sub_category" => "Beeldscherm",
          "price" => 12999,
          "description"=> "Een 24 inch full-HD (1920 x 1080) beeldscherm met een in hoogte verstelbare voet en draaibaar- en kantelbaar scherm.",
          "img_path" => "public/img/hp_eletedisplay_24.png", 
          "img_alt" => "Vooraanzicht van een zilvere beeldscherm.", 
          "permission" => false,
          "rule_id" => 4,
        ]);

        DB::table('products')->insert([

          "brand" => "Logitech",
          "model" => "MX Master 3",
          "category" => "Randapparatuur",
          "sub_category" => "Muis",
          "price" => 8999,
          "description"=> "Draadloze muis met een ergonomische grip (rechtshandig). De MX Master 3 een extra duim scrollwiel en 2 vrij instelbare knoppen.",
          "img_path" => "public/img/logitech_mx_master_3.png", 
          "img_alt" => "Zijaazicht van een draadloze muis met een ergonomische grip..", 
          "rule_id" => 3,
        ]);

        DB::table('products')->insert([
          "brand" => "HP",
          "model" => "200",
          "category" => "Randapparatuur",
          "sub_category" => "Muis",
          "price" => 2299,
          "description"=> "Een kleine draadloze muis geschikt voor links- en rechtshandigen. Ideaal voor onderweg.",
          "img_path" => "public/img/hp_200.png", 
          "img_alt" => "Bovenaanzicht van een kleine, draadloze zwarte muis met usb ontvanger.", 
          "permission" => false,
          "rule_id" => 3,

        ]);

        DB::table('products')->insert([

          "brand" => "HP",
          "model" => "450",
          "category" => "Randapparatuur",
          "sub_category" => "Toetsenbord",
          "price" => 2499,
          "description"=> "Zwart HP toetsenbord met USB-kabel. Bezit geen draadloze functionaliteit.",
          "img_path" => "public/img/hp_400.png", 
          "img_alt" => "Vooraanzicht van een zwarte toetsenbord en muis.", 
          "permission" => false,
          "rule_id" => 3,

        ]);

        DB::table('products')->insert([
          "brand" => "Merkloos",
          "model" => "Mk. 1",
          "category" => "Werkplek",
          "sub_category" => "Bureau",
          "price" => 40000,
          "description"=> "Een verstelbaar bureau om ergonomisch te werken zoals je op kantoor gewend bent.",
          "img_path" => "public/img/merkloos_bureau.png", 
          "img_alt" => "Een bovenaanzicht van een witte bureau met een hendel om de hoogte te verstellen.", 
        ]);
    }
}
