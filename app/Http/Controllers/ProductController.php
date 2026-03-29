<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Mostrar lista de productos (vista pública)
     */
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact('products'));
    }

    /**
     * Mostrar formulario para crear producto
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Guardar nuevo producto en BD
     */
    public function store(Request $request)
    {
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

        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $imagenPath = $file->store('products', 'public');
        }

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

        return redirect()->route('admin.product.table')->with('success', 'Producto creado correctamente.');
    }

    /**
     * Mostrar detalle de un producto
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view("products.show", compact('product'));
    }

    /**
     * Mostrar formulario para editar producto
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view("products.edit", compact('product'));
    }

    /**
     * Actualizar producto en BD
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria' => 'required|string',
            'especificaciones' => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $imagenPath = $file->store('products', 'public');
            $validated['imagen'] = $imagenPath;
        }

        $product->update([
            'name' => $validated['name'],
            'marca' => $validated['marca'],
            'description' => $validated['descripcion'],
            'price' => $validated['precio'],
            'stock' => $validated['stock'],
            'category' => $validated['categoria'],
            'especificaciones' => $validated['especificaciones'] ?? null,
            'imagen' => $validated['imagen'] ?? $product->imagen,
            'featured' => $request->has('featured') ? 1 : 0,
        ]);

        return redirect()->route('admin.product.table')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Eliminar producto
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        
        return redirect()->route('admin.product.table')->with('success', 'Producto eliminado correctamente.');
    }

    /**
     * Mostrar tabla de productos (panel admin)
     */
    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(20);
        return view('products.table', ['products' => $products]);
    }
}
