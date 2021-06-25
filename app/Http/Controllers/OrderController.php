<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rule;
use App\Models\User;
use App\Models\Order;
use DB;
use Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function store(Request $request){
        $user_id = Auth::User()->id;
        $product_id_array = $request->product_id_array;
        $response_array = [];

        for ($index=0; $index < count($product_id_array); $index++) { 
            $product = Product::all()->where("id", "==", $product_id_array[$index])->first();
            $product_price =  $product->price;
            $product_sub_category = $product->sub_category;
            $product_brand = $product->brand;
            $product_model = $product->model;
            $product_name = $product_sub_category . " " . $product_brand . " " . $product_model;
            // deze functie checkt hoevaak de gebruiker hetzelfde item heeft besteld
            $user_frequentie = Order::all()->where("user_id", "==", $user_id)->where("product_id", "==", $product->id);
            $user_frequentie_count = $user_frequentie->count();

            //deze functie checkt hoevaak de gebruiker hetzelde item heeft besteld in het huidige jaar
            $huidig_jaar = Carbon::now()->year;
            $user_frequentie_jaarlijks = $user_frequentie->where("created_year", "==", $huidig_jaar);
            $user_frequentie_jaarlijks_count = $user_frequentie_jaarlijks->count();

            // deze functie checkt de bestel-limit van het product
            $bestel_limit = $product->limit;
            $product_rule_id = $product->rule_id;

            $rule_1 = Rule::all()->where("id", "==", "1")->first();
            $rule_2 = Rule::all()->where("id", "==", "2")->first();
            $rule_3 = Rule::all()->where("id", "==", "3")->first();
            $rule_4 = Rule::all()->where("id", "==", "4")->first();

        
            if ($product_rule_id == 1) {
                if ($user_frequentie_count < $rule_1->total_limit) {

                    // hier de code om te bestellen
                    DB::table('orders')->insert([
                        'user_id' => $user_id,
                        'product_id' => $product_id_array[$index],
                        'price' => $product_price,
                    ]);

                    $response_array[$index] = $product_name . " in de database gezet met regel 1";
                }
                $response_array[$index] = "Limiet voor ". $product_name . " al bereikt";
            }


            elseif ($product_rule_id == 2) {
                //hoeveel bestellingen van het product zijn er dit jaar gemaakt.
                //als het minder is dan het limit in het huidige jaar
                //voeg dan het product 1 keer toe
                if ($user_frequentie_jaarlijks_count < $rule_2->yearly_limit) {
                    
                    // hier de code om te bestellen
                    DB::table('orders')->insert([
                        'user_id' => $user_id,
                        'product_id' => $product_id_array[$index],
                        'price' => $product_price,
                    ]);

                    $response_array[$index] = $product_name . "In de database gezet met regel 2";
                }

                $response_array[$index] = "Limiet voor ". $product_name . " al bereikt";
            }


            elseif ($product_rule_id == 3) {
                if ($user_frequentie_jaarlijks_count < $rule_3->yearly_limit){

                    // hier de code om te bestellen
                    DB::table('orders')->insert([
                        'user_id' => $user_id,
                        'product_id' => $product_id_array[$index],
                        'price' => $product_price,
                    ]);

                    $response_array[$index] = $product_name . "In de database gezet met regel 3";
                }
                
                $response_array[$index] = "Bestellimiet voor ". $product_name . " al bereikt";
            }
            

            elseif ($product_rule_id == 4) {
                if ($user_frequentie_jaarlijks_count < $rule_4->yearly_limit){

                    // hier de code om te bestellen
                    DB::table('orders')->insert([
                        'user_id' => $user_id,
                        'product_id' => $product_id_array[$index],
                        'price' => $product_price,
                    ]);

                    $response_array[$index] = $product_name . "In de database gezet met regel 4";
                }
                
                $response_array[$index] = "Limiet voor ". $product_name . " al bereikt";
            }

            elseif ($product_rule_id == null) {
                DB::table('orders')->insert([
                    'user_id' => $user_id,
                    'product_id' => $product_id_array[$index],
                    'price' => $product_price,
                ]);

                $response_array = $product_name . " is toegevoegd aan de bestelling.";
            }
            
        }
        // return $response_array;
        return $response_array;
        



        // return (Product::all()->where("id", "==", $product_id_array[$index])->first());


        // Dit is voorbeeldcode om te bestellen

        // DB::table('orders')->insert([
        //     'user_id' => $user_id,
        //     'product_id' => $product_id_array[$index],
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


    public function eenWeek(){

        $all = DB::table('orders')->leftJoin('users', 'orders.user_id', '=', 'users.id')->
        leftJoin('products', 'orders.product_id', '=', 'products.id')->
        select('orders.*', 'users.first_name', 'users.last_name', 'products.brand', 'products.model', 'products.category', 'products.sub_category')->
        get();

        return $all->where('created_at', '>=', Carbon::now()->subDays(7))->values();
    }


    public function tweeWeken(){
        $all = DB::table('orders')->leftJoin('users', 'orders.user_id', '=', 'users.id')->
        leftJoin('products', 'orders.product_id', '=', 'products.id')->
        select('orders.*', 'users.first_name', 'users.last_name', 'products.brand', 'products.model', 'products.category', 'products.sub_category')->
        get();

        return $all->where('created_at', '>=', Carbon::now()->subDays(14))->values();
    }


    public function ditJaar(){
        $all = DB::table('orders')->leftJoin('users', 'orders.user_id', '=', 'users.id')->
        leftJoin('products', 'orders.product_id', '=', 'products.id')->
        select('orders.*', 'users.first_name', 'users.last_name', 'products.brand', 'products.model', 'products.category', 'products.sub_category')->
        get();

        return $all->where('created_year', '=', Carbon::now()->year)->values();
    }
    
}
