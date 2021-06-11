<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rule;
use App\Models\user;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    public function plaatsOrder($user_id, $product_id){
        $product_price = Product::all()->where("id", "==", $product_id)->first()->price;

        DB::table('orders')->insert([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'price' => $product_price,
            'quantity' => 1,
        ]);

        return ("besteld");
    }
}
