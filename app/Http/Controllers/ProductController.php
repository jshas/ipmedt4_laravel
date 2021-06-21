<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Rule;
use App\Models\Order;
use Illuminate\Http\Request;
use DB;
use Auth;




class ProductController extends Controller{

    public function index(){
        if(Auth::user()->id){
            $products = Product::with('rule')->get()->all();

            $user_id = Auth::user()->id;
            $orders = Order::all()->where('user_id', '=', $user_id)->countBy('product_id')->sortKeys(); // Provides a count of products ordered by the user
            return [$products, $user_id, $orders];
        }
    }

    public function show($id){
        $product = Product::find($id);
        return $product;
    }

    public function store(Request $request, Product $product) {
        $product->brand = $request->input('brand');
        $product->model = $request->input('model');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->sub_category = $request->input('sub_category');
        $product->description = $request->input('description');
        
        $product->save();
    }

};
