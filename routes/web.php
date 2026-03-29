<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/', [ProductController::class, 'index']);

// Rutas de autenticación
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de dashboard
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Rutas públicas de productos
Route::prefix("products")->controller(ProductController::class)->group(function () {
    Route::get("/", "index")->name('products.index');
    Route::get("/{id}", "show")->name('products.show');
});

// Rutas de administración
Route::prefix("admin")->middleware('auth')->group(function () {
    Route::get("/", [AdminController::class, 'index'])->name('admin');
    
    // Rutas de categorías
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    
    // Rutas de productos
    Route::get('product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('product/table', [ProductController::class, 'table'])->name('admin.product.table');
    Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('product/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
});

// Rutas resource alternativas (opcional, si no usas las de arriba)
Route::resource('product', ProductController::class)->middleware('auth');





