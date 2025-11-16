<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        return view("products.index", compact('products'));
    }

    function create(){
        return view("products.create");
    }

    function show($id) {
        $product = Product::findOrFail($id);
        return view("products.show", compact('product'));
    }

    public function store(Request $request)
    {
        // Validar datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria' => 'required|string',
            'especificaciones' => 'nullable|string',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Guardar imagen
        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $imagenPath = $file->store('products', 'public');
        }

        // Crear el producto
        Product::create([
            'name' => $validated['name'],
            'marca' => $validated['marca'],
            'description' => $validated['descripcion'],
            'price' => $validated['precio'],
            'stock' => $validated['stock'],
            'category' => $validated['categoria'],
            'especificaciones' => $validated['especificaciones'] ?? null,
            'imagen' => $imagenPath,
            'featured' => $request->has('featured') ? 1 : 0,
        ]);

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente.');
    }

    public function table()
    {
        $products = Product::all();
        return view('products.table',['products'=>$products]);
    }
}
