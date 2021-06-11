<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rule;
use App\Models\User;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    public function plaatsOrder($user_id, $product_id){
        $product_price = Product::all()->where("id", "==", $product_id)->first()->price;

        // deze functie checkt hoevaak de gebruiker hetzelde item heeft besteld
        $user_frequentie = Order::all()->where("user_id", "==", $user_id)->where("product_id", "==", $product_id)->count();
        
        // deze functie checkt de bestel-limit van het product
        $bestel_limit = Product::all()->where("id", "==", $product_id)->first()->limit;

        if ( $user_frequentie < $bestel_limit) {
            DB::table('orders')->insert([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'price' => $product_price,
                'quantity' => 1,
            ]);

            return ("besteld");
        }

        else{
            return ("over limiet, niet besteld");
        }
        
        // return ($bestel_limit);
    }
}
