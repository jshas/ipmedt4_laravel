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

        //deze functie checkt hoevaak de gebruiker hetzelde item heeft besteld in het huidige jaar
        $huidig_jaar = Carbon::now()->year;
        $user_frequentie_jaarlijks = $user_frequentie->where("created_year", "==", $huidig_jaar);
        $user_frequentie_jaarlijks_count = $user_frequentie_jaarlijks->count();

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
                DB::table('orders')->insert([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'price' => $product_price,
                ]);
                

                return ("In de database gezet met regel 1");
            }
            return ("limiet al bereikt");
        }


        elseif ($product_rule_id == 2) {
            //hoeveel bestellingen van het product zijn er dit jaar gemaakt.
            //als het minder is dan het limit in het huidige jaar
            //voeg dan het product 1 keer toe
            if ($user_frequentie_jaarlijks_count < $rule_2->yearly_limit) {
                
                // hier de code om te bestellen
                DB::table('orders')->insert([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'price' => $product_price,
                ]);

                return("In de database gezet met regel 2");
            }

            return("limiet al bereikt");
        }


        elseif ($product_rule_id == 3) {
            if ($user_frequentie_jaarlijks_count < $rule_3->yearly_limit){

                // hier de code om te bestellen

                return ("In de database gezet met regel 3");
            }
            
            return("limiet al bereikt");
        }
        

        elseif ($product_rule_id == 4) {
            if ($user_frequentie_jaarlijks_count < $rule_4->yearly_limit){

                // hier de code om te bestellen

                return ("In de database gezet met regel 4");
            }
            
            return("limiet al bereikt");
        }

        return (Product::all()->where("id", "==", $product_id)->first());



        // Dit is voorbeeldcode om te bestellen

        // DB::table('orders')->insert([
        //     'user_id' => $user_id,
        //     'product_id' => $product_id,
        //     'price' => $product_price,
        // ]);



    }


    public function show(){

        $all = DB::table('orders')->leftJoin('users', 'orders.user_id', '=', 'users.id')->
        leftJoin('products', 'orders.product_id', '=', 'products.id')->
        select('orders.*', 'users.first_name', 'users.last_name', 'products.brand', 'products.model', 'products.category', 'products.sub_category')->
        get();

        return ($all);
    }
}
