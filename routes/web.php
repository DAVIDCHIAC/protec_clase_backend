<?php

use App\Http\Controllers\ProductControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ("products",[ProductControler::class, "index"]);

Route::get ("products/create",[ProductControler::class, "create"]);


Route::get ("products/{name}/{categori}",function($name,$categori = null){
    if ($categori != null){
        return "detalle de cada producto" . $name;
    }else{
     return "DETALLE DE CADA PRODUCTO" . $name . "de la categoria:" . $categori;
    }

});




