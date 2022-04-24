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

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang Kami"
    ]);
});

Route::get('/ganesha', function () {
    return view('ganesha', [
        "title" => "Informasi"
    ]);
});

Route::get('/nf', function () {
    return view('nf', [
        "title" => "Informasi"
    ]);
});

Route::get('/primagama', function () {
    return view('primagama', [
        "title" => "Informasi"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');
