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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/lpwd', function () {
    return view('lupapwd');
});

Route::get('/regis', function () {
    return view('register');
});

Route::get('/lpwd2', function () {
    return view('lupapwd2');
});

Route::get('/informasi', function () {
    return view('informasi');
});