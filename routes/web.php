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
    return view('Home');
});

Route::get('/red', function () {
    return view('Red');
});

Route::get('/blue', function () {
    return view('Blue');
});

Route::get('/green', function () {
    return view('Green');
});

Route::get('/purple', function () {
    return view('Purple');
});
