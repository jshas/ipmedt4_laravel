<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:sanctum')->get('/products', 'App\Http\Controllers\ProductController@index');
Route::get('/products/', 'App\Http\Controllers\ProductController@index');

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show');

Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/{id}', 'App\Http\Controllers\UserController@show');

Route::get('/order/{user_id}/{product_id}', 'App\Http\Controllers\OrderController@plaatsOrder');

Route::get('/order/all', 'App\Http\Controllers\OrderController@show');

Route::get('/category/Communicatie', 'App\Http\Controllers\CategoryController@CategorieCommunicatie');
Route::get('/category/Ergonomie', 'App\Http\Controllers\CategoryController@CategorieErgonomie');
Route::get('/category/Kabel', 'App\Http\Controllers\CategoryController@CategorieKabel');
Route::get('/category/Print', 'App\Http\Controllers\CategoryController@CategoriePrint');
Route::get('/category/Randapparatuur', 'App\Http\Controllers\CategoryController@CategorieRandapparatuur');
Route::get('/category/Werkplek', 'App\Http\Controllers\CategoryController@CategorieWerkplek');
