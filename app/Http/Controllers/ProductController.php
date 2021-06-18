<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rule;
use DB;


class ProductController extends Controller{

    public function index(){
        $products = Product::with('rule')->get()->all(); 
        return $products;
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
