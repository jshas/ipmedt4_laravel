<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rule;
use App\Models\User;
use App\Models\Order;
use DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function plaatsOrder($user_id, $product_id){
        $product_price = Product::all()->where("id", "==", $product_id)->first()->price;

        // deze functie checkt hoevaak de gebruiker hetzelde item heeft besteld
        $user_frequentie = Order::all()->where("user_id", "==", $user_id)->where("product_id", "==", $product_id);
        $user_frequentie_count = $user_frequentie->count();


        $huidig_jaar = Carbon::now()->year;

        // deze functie checkt de bestel-limit van het product
        $bestel_limit = Product::all()->where("id", "==", $product_id)->first()->limit;

        // $product_rule = DB::table('products')->join('rules', 'products.rule_id', '=', 'rules.id')->get()->rules.id;
        $product_rule_id = Product::all()->where("id", "==", $product_id)->first()->rule_id;


        $rule_1 = Rule::all()->where("id", "==", "1")->first();
        $rule_2 = Rule::all()->where("id", "==", "2")->first();
        $rule_3 = Rule::all()->where("id", "==", "3")->first();
        $rule_4 = Rule::all()->where("id", "==", "4")->first();


        if ($product_rule_id == 1) {
            if ($user_frequentie_count < $rule_1->total_limit) {

                // hier de code om te bestellen

                return ("In de database gezet met regel 1");
            }
            return ("limiet al bereikt");
        }


        elseif ($product_rule_id == 2) {
            //hoeveel bestellingen ervan zijn er dit jaar gemaakt.
            //als het minder is dan het limit in het huidige jaar
            //voeg dan het product 1 keer toe

        }

        // $order_1_year = Order::all()->first()->created_at;
        // $year_order = Carbon::createFromFormat('Y-m-d H:i:s', $order_1_year)->year;
        
        // $year_now = Carbon::now()->year;
        

        DB::table('orders')->insert([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'price' => $product_price,
        ]);

        return ("Done");


        // if ( $user_frequentie < $bestel_limit) {
            // DB::table('orders')->insert([
            //     'user_id' => $user_id,
            //     'product_id' => $product_id,
            //     'price' => $product_price,
            // ]);

        //     return ("besteld");
        // }

        // else{
        //     return ("over limiet, niet besteld");
        // }
        
        
    }
}
