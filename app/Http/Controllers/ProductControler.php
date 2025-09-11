<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControler extends Controller
{
    
  function index(){
        return view("productos.index");

  }
  function create(){
        return view("productos.create");

  }
  function show ($name ,$categori = null)
  {if ($categori != null){
        return "detalle de cada producto" . $name;
    }else{
     return "DETALLE DE CADA PRODUCTO" . $name . "de la categoria:" . $categori;
    }
}  //
}
