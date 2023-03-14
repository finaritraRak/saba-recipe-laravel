<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;


Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);
Route::get('/create', [App\Http\Controllers\PostsController::class, 'create']);
//Route::get('/blog/{id}', [App\Http\Controllers\PostsController::class, 'show']);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);
Route::get('/shop', [App\Http\Controllers\PagesController::class, 'shop']);
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);



// App Routes





// Profile
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update']);


//admin
Route::middleware(['auth', 'role:admin'])->group(function (){
    //Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'show']);


//category
Route::get('/addcategory', [App\Http\Controllers\CategoryController::class, 'addCategory']);
Route::get('/savecategory', [App\Http\Controllers\CategoryController::class, 'saveCategory']);
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'category']);
Route::get('editcategory/{category}', [App\Http\Controllers\categoryController::class, 'edit_category']);
Route::put('editcategory/{category}', [App\Http\Controllers\categoryController::class, 'update']);
Route::get('/deletecategory/{id}', [App\Http\Controllers\categoryController::class, 'destroy']);


//produit
Route::get('/addproduct', [App\Http\Controllers\ProductController::class, 'addProduct']);
Route::post('/saveproduct', [App\Http\Controllers\ProductController::class, 'saveProduct']);
Route::get('/product', [App\Http\Controllers\ProductController::class, 'product']);
Route::get('/edit_product/{id}', [App\Http\Controllers\ProductController::class, 'edit_product']);
Route::post('/modifier_product', [App\Http\Controllers\ProductController::class, 'modifier_product']);
Route::get('/delete_product/{id}', [App\Http\Controllers\ProductController::class, 'delete_product']);
Route::get('/activer_product/{id}', [App\Http\Controllers\ProductController::class, 'activer_product']);
Route::get('/desactiver_product/{id}', [App\Http\Controllers\ProductController::class, 'desactiver_product']);



// Users

Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
Route::get('/users/store', [App\Http\Controllers\UserController::class, 'store']);
Route::get('/users/edit/{user}', [App\Http\Controllers\UserController::class, 'edit']);
Route::patch('/users/{user}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('/users/delete/{user}', [App\Http\Controllers\UserController::class, 'destroy']);

  
    
});
