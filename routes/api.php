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

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/products/add', 'App\Http\Controllers\ProductController@store');


    Route::get('/products', 'App\Http\Controllers\ProductController@index');
    Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show');

    Route::get('/users/departments', 'App\Http\Controllers\UserController@departments');
    Route::get('/users/roles', 'App\Http\Controllers\UserController@roles');

    Route::post('/users/add', 'App\Http\Controllers\UserController@store');

    Route::get('/users', 'App\Http\Controllers\UserController@index');
    Route::get('/users/{id}', 'App\Http\Controllers\UserController@show');

    Route::post('/order/create', 'App\Http\Controllers\OrderController@store');

    Route::get('/order/all', 'App\Http\Controllers\OrderController@show');
    Route::get('order/7dagen', 'App\Http\Controllers\OrderController@eenWeek');
    Route::get('order/14dagen', 'App\Http\Controllers\OrderController@tweeWeken');
    Route::get('order/ditjaar', 'App\Http\Controllers\OrderController@ditJaar');

    Route::get('/category/Communicatie', 'App\Http\Controllers\CategoryController@CategorieCommunicatie');
    Route::get('/category/Ergonomie', 'App\Http\Controllers\CategoryController@CategorieErgonomie');
    Route::get('/category/Kabel', 'App\Http\Controllers\CategoryController@CategorieKabel');
    Route::get('/category/Print', 'App\Http\Controllers\CategoryController@CategoriePrint');
    Route::get('/category/Randapparatuur', 'App\Http\Controllers\CategoryController@CategorieRandapparatuur');
    Route::get('/category/Werkplek', 'App\Http\Controllers\CategoryController@CategorieWerkplek');

    Route::get('/user', function (Request $request) {
        return $request->user();
});

Route::post('/products/add', 'App\Http\Controllers\ProductController@store');

Route::middleware('auth:sanctum')->get('/products', 'App\Http\Controllers\ProductController@index');
// Route::get('/products/', 'App\Http\Controllers\ProductController@index');

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show');

Route::get('/users/departments', 'App\Http\Controllers\UserController@departments');
Route::get('/users/roles', 'App\Http\Controllers\UserController@roles');

Route::post('/users/add', 'App\Http\Controllers\UserController@store');

Route::middleware('auth:sanctum')->get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/{id}', 'App\Http\Controllers\UserController@show');

Route::post('/order/create', 'App\Http\Controllers\OrderController@store');

Route::get('/order/all', 'App\Http\Controllers\OrderController@show');
Route::get('order/7dagen', 'App\Http\Controllers\OrderController@eenWeek');
Route::get('order/14dagen', 'App\Http\Controllers\OrderController@tweeWeken');
Route::get('order/ditjaar', 'App\Http\Controllers\OrderController@ditJaar');

Route::get('/category/Communicatie', 'App\Http\Controllers\CategoryController@CategorieCommunicatie');
Route::get('/category/Ergonomie', 'App\Http\Controllers\CategoryController@CategorieErgonomie');
Route::get('/category/Kabel', 'App\Http\Controllers\CategoryController@CategorieKabel');
Route::get('/category/Print', 'App\Http\Controllers\CategoryController@CategoriePrint');
Route::get('/category/Randapparatuur', 'App\Http\Controllers\CategoryController@CategorieRandapparatuur');
Route::get('/category/Werkplek', 'App\Http\Controllers\CategoryController@CategorieWerkplek');
