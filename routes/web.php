<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('shoppingwelcome');
    //return redirect('productList');
});



Route::get('/productform', [ProductController::class, 'showForm'])->name('productform.showForm');
Route::post('/productform', [ProductController::class, 'processForm'])->name('productform.submit');

Route::get('/productList', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/products', [ProductController::class, 'productList'])->name('products.productList');
// Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
// Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update'); // Use PATCH method for updates