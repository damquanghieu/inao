<?php

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
    return view('backend/home');
});
Route::get('order', function () {
    return view('backend/order');
});
Route::get('design', function () {
    return view('backend/design');
});
Route::get('billing', function () {
    return view('backend/billing');
});
Route::get('placeorder',function(){
    return view('backend/placeorder');
})->name("placeorder");
