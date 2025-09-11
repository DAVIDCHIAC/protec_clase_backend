<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ("products",function(){
    return"LISTADO DE PRODUCTOS";
});
Route::get ("products/create",function(){
    return"FORMULARIO DE CADA PRODUCTO";
});

Route::get ("products/{name}/{categori}",function($name,$categori){
    return"DETALLE DE CADA PRODUCTO" . $name."de ñ¿la categoria:" . $categori;
});




