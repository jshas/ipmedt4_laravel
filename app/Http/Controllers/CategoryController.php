<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rule;
use DB;

class CategoryController extends Controller
{
    public function categoriseerProducten ($title){
      $product_list = Product::all()->where("category", "==", $title);
      return $product_list;
    }
}
