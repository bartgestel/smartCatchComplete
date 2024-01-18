<?php

use Illuminate\Support\Facades\Route;

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
Route::get(' /login', function () {
    return view('inlog');
});
Route::get('dashboard', 'App\Http\Controllers\DashboardController@getData');
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/' , function () {
    return view('index');
});

Route::get('/support', function () {
    return view('support');
});

Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::get('/logout', 'App\Http\Controllers\UserController@logout');

Route::get('/ship/{id}', 'App\Http\Controllers\ShipController@boatData');
