<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Just testing api endpoints
// 
Route::get('/products', function () {
    $products = [
        ["category" => "Fruits", "price" => "$1", "stocked" => true, "name" => "Apple"],
        ["category" => "Fruits", "price" => "$1", "stocked" => true, "name" => "Dragonfruit"],
        ["category" => "Fruits", "price" => "$2", "stocked" => false, "name" => "Passionfruit"],
        ["category" => "Vegetables", "price" => "$2", "stocked" => true, "name" => "Spinach"],
        ["category" => "Vegetables", "price" => "$4", "stocked" => false, "name" => "Pumpkin"],
        ["category" => "Vegetables", "price" => "$1", "stocked" => true, "name" => "Peas"],
        ["category" => "Meat", "price" => "$5", "stocked" => true, "name" => "Chicken"],
        ["category" => "Meat", "price" => "$7", "stocked" => true, "name" => "Beef"],
        ["category" => "Meat", "price" => "$6", "stocked" => true, "name" => "Pork"],
    ];

    return response()->json($products);
});