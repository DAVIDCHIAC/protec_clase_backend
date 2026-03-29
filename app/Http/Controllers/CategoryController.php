<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   public function create()
   {
       return view('admin.category.create');
   }

   public function store(Request $request)
   {
     // dd($request->all());

        Categories::create([
            'name' => $request->get('name')
        ]);
        return "se ha creado la categoria correctamente";
   }
}
