<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rule;
use DB;

class CategoryController extends Controller
{
    public function CategorieCommunicatie(){
      $product_list = Product::all()->where("category", "==", "Communicatie");
      return $product_list;
    }
    public function CategorieErgonomie(){
      $product_list = Product::all()->where("category", "==", "Ergonomie");
      return $product_list;
    }
    public function CategorieKabel(){
      $product_list = Product::all()->where("category", "==", "Kabel");
      return $product_list;
    }
    public function CategoriePrint(){
      $product_list = Product::all()->where("category", "==", "Print");
      return $product_list;
    }
    public function CategorieRandapparatuur(){
      $product_list = Product::all()->where("category", "==", "Randapparatuur");
      return $product_list;
    }
    public function CategorieWerkplek(){
      $product_list = Product::all()->where("category", "==", "Werkplek");
      return $product_list;
    }
}
