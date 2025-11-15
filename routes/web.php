<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::prefix("products")->controller(ProductController::class)->group(function () {
    Route::get("/", "index")->name('products.index');
    //Route::get("/create", "create")->name('products.create');
    Route::get("/{name}/{category?}", "show")->name('products.show');
    Route::post("/", "store")->name('products.store');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ProductController::class, 'index']);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::prefix("admin")->controller(AdminController::class)->group(function () {
    Route::get("/", "index")->name('admin');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('product/create', [ProductController::class, 'create']);
   
});
//Route::prefix("category")->controller(CategoryController::class)->group(function () {
  //  Route::get("/create", "index")->name('categoryCreate');
   // Route::post("category/store", [CategoryController::class, 'store'])->name('category.store');
   
//});





