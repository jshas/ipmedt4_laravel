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
        $product = Product::find($id)->with('rule');
        $product_rule = $product::with;
        return $product;
    }

};
