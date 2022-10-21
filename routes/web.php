<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\userController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\admin\userdatacontroller;
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
Route::any('/adminprofile', function () {
    return view('profile.adminprofile');
});
Route::post('profile-update', [HomeController::class, 'profileUpdate'])->name('profileupdate');
Route::post('change-password',[HomeController::class,'changePassword'])->name('changePassword');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product.products', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');


Route::get('calendar', [CalenderController::class, 'index']);
Route::post('calendarAjax', [CalenderController::class, 'ajax']);

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

//admin side userdata show 
Route::get('admin.tables', [userdatacontroller::class, 'index']);