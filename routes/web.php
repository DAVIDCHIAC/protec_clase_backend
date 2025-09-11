<?php

use App\Http\Controllers\ProductControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::profix("products")->Controller(ProductControler::class)->group (function(){
Route::get ("products", "index");
Route::get ("products/create","create");
Route::get ("products/{name}/{categori}", "show");
});






