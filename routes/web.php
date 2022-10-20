<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\userController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController
;

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
Route::get('/userdata-home', [userController::class, 'index']);
Route::post('/store', [userController::class, 'store'])->name('store');
Route::get('/fetchall', [userController::class, 'fetchAll'])->name('fetchAll');

Route::delete('/delete', [userController::class, 'delete'])->name('delete');
Route::get('/edit', [userController::class, 'edit'])->name('edit');
Route::post('/update', [userController::class, 'update'])->name('update');


Route::get('home', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);
Route::get('/', function () {
    return view('auth.login');
});
Route::any('/profile', function () {
    return view('profile.profile');
});
Route::post('profile.profile', [HomeController::class, 'profileUpdate'])->name('profileupdate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product.products', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');


// Route::get('calendar', [CalenderController::class, 'index'])->name('calendar.index');
// Route::post('calendar/create-event', [CalenderController::class, 'create'])->name('calendar.create');
// Route::patch('calendar/edit-event', [CalenderController::class, 'edit'])->name('calendar.edit');
// Route::delete('calendar/remove-event', [CalenderController::class, 'destroy'])->name('calendar.destroy');

Route::get('calendar', [CalenderController::class, 'index']);
Route::post('calendarAjax', [CalenderController::class, 'ajax']);