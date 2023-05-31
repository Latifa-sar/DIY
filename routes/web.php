<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcomediy');
});


Route::get('/text', function () {
    return view('text');
});


Route::get('/A1',[DiyController::class,'A1'])->name('A1');
Route::get('/A2',[DiyController::class,'A2'])->name('A2');


Route::post('/invoice',[DiyController::class,'invoice'])->name('invoice');


Route::get('/checkout/{id}',[DiyController::class,'checkout'])->name('products');

Route::get('/diy',[DiyController::class,'viweallproducts'])->name('products');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
