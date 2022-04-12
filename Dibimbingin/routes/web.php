<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/bimbel', function () {
    return view('bimbel',[
        "title" => "Bimbel"
    ]);
});

Route::get('/beasiswa', function () {
    return view('beasiswa',[
        "title" => "Beasiswa"
    ]);
});

Route::get('/kursus', function () {
    return view('kursus', [
        "title" => "Kursus"
    ]);
});


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

