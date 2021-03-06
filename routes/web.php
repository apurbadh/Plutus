<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();
Route::varbox();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', function(){
    return view("landing.contact");
});
Route::get('about', function (){
    return view("landing.about");
});
Route::get('/send', [App\Http\Controllers\TransactionController::class, 'index']);
Route::post('/send', [App\Http\Controllers\TransactionController::class, 'sendMoney']);
Route::get("/transactions", [\App\Http\Controllers\TransactionController::class, "transaction"]);
