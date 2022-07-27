<?php

use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Route;

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
    return view('utama.index');
});
Route::get('about', function () {
    return view('utama.about');
});
Route::get('contact', function () {
    return view('utama.contact');
});
Route::get('shop', [produkController::class, 'shop']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('produks', App\Http\Controllers\produkController::class);
