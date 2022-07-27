<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/ee', [HomeController::class, 'index']);
Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect')->middleware('auth');

// ---------- Category -----------
Route::get('/view_category', [AdminController::class, 'view_category'])->name('view_category');
Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::get('/update_category/{id}', [AdminController::class, 'update_category'])->name('update_category');
Route::post('/edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category');

// ---------- Product -----------
Route::get('/view_product', [AdminController::class, 'view_product'])->name('view_product');
Route::post('/add_product', [AdminController::class, 'add_product'])->name('add_product');
Route::get('/show_product', [AdminController::class, 'show_product'])->name('show_product');
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');
Route::get('/update_product/{id}', [AdminController::class, 'update_product'])->name('update_product');
Route::post('/edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');


// ---------- Frontend ------------
Route::get('/checkout', function () {
    return view('home.checkout');
});
Route::get('/cart', function () {
    return view('home.cart');
});
Route::get('/contactus', function () {
    return view('home.contactus');
});
