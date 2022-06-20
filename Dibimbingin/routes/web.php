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
    return redirect('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tentangkami' , [\App\Http\Controllers\HomeController::class , 'about'] )->name('about');
Route::get('/bimbels' , [\App\Http\Controllers\HomeController::class , 'bimbel'])->name('bimbel');
Route::get('/bimbelsmp' , [\App\Http\Controllers\HomeController::class , 'bimbelsmp'])->name('bimbelsmp');
Route::get('/bimbelsma' , [\App\Http\Controllers\HomeController::class , 'bimbelsma'])->name('bimbelsma');
Route::get('/detailbimbel/{id}' , [\App\Http\Controllers\HomeController::class , 'detailbimbel'])->name('detailbimbel');

Route::get('/beasiswa' , [\App\Http\Controllers\HomeController::class , 'beasiswa'])->name('beasiswa');
Route::get('/detailbeasiswa/{id}' , [\App\Http\Controllers\HomeController::class , 'detailbeasiswa'])->name('detailbeasiswa');

Route::get('/tryout' , [\App\Http\Controllers\HomeController::class , 'tryout'])->name('tryout');
Route::get('/detailtryout/{id}' , [\App\Http\Controllers\HomeController::class , 'detailtryout'])->name('detailtryout');

Route::get('/event' , [\App\Http\Controllers\HomeController::class , 'event'])->name('event');
Route::get('/detailevent/{id}' , [\App\Http\Controllers\HomeController::class , 'detailevent'])->name('detailevent');

Route::prefix('admin')->group(function (){
    Route::get('/' , function (){
        return redirect()->route('overview');
    });
    Route::get('/overview' , [\App\Http\Controllers\adminController::class , 'overview'])->name('overview');
    Route::get('/user' , [\App\Http\Controllers\adminController::class , 'user'])->name('admin.user');
    Route::get('/bimbel/index' , [\App\Http\Controllers\adminController::class , 'indexbimbel'])->name('admin.indexbimbel');
    Route::get('/bimbel/add/smp' , [\App\Http\Controllers\adminController::class , 'addsmp'])->name('admin.addsmp');
    Route::post('/bimbel/add/smp' , [\App\Http\Controllers\adminController::class , 'addsmppost'])->name('admin.addsmppost');
    Route::get('/bimbel/edit/smp/{id}' , [\App\Http\Controllers\adminController::class , 'editsmp'])->name('admin.editsmp');
    Route::get('/bimbel/smp/list' , [\App\Http\Controllers\adminController::class , 'listsmp'])->name('admin.listsmp');
    Route::post('/bimbel/edit/smp/{id}' , [\App\Http\Controllers\adminController::class , 'editsmppost'])->name('admin.editsmp');

    Route::get('/bimbel/add/sma' , [\App\Http\Controllers\adminController::class , 'addsma'])->name('admin.addsma');
    Route::post('/bimbel/add/sma' , [\App\Http\Controllers\adminController::class , 'addsmapost'])->name('admin.addsmapost');
    Route::get('/bimbel/sma/list' , [\App\Http\Controllers\adminController::class , 'listsma'])->name('admin.listsma');

    Route::get('/pengajar/delete/{id}' ,[\App\Http\Controllers\adminController::class , 'deletepengajar'])->name('admin.deletepengajar');
    Route::get('/bimbel/delte/{id}' , [\App\Http\Controllers\adminController::class , 'deletebimbel'])->name('admin.deletebimbel');

    Route::get('/beasiswa/list' , [\App\Http\Controllers\adminController::class , 'beasiswalist'])->name('admin.listbeasiswa');
    Route::get('/beasiswa/add' , [\App\Http\Controllers\adminController::class , 'addbeasiswa'])->name('admin.addbeasiswa');
    Route::post('/beasiswa/add' , [\App\Http\Controllers\adminController::class , 'addbeasiswapost'])->name('admin.addbeasiswapost');
    Route::get('/beasiswa/edit/{id}' , [\App\Http\Controllers\adminController::class , 'editbaesiswa'])->name('admin.editbeasiswa');
    Route::post('/beasiswa/edit/{id}' , [\App\Http\Controllers\adminController::class , 'editbeasiswapost'])->name('admin.editbeasiswapost');
    Route::get('/beasiswa/delete/{id}' , [\App\Http\Controllers\adminController::class , 'deletebeasiswa'])->name('admin.deletebeasiswa');

    Route::get('/tryout/list' , [\App\Http\Controllers\adminController::class , 'tryoutlist'])->name('admin.listtryout');
    Route::get('/tryout/add' , [\App\Http\Controllers\adminController::class , 'addtryout'])->name('admin.addtryout');
    Route::post('/tryout/add' , [\App\Http\Controllers\adminController::class , 'addtryoutpost'])->name('admin.addtryoutpost');
    Route::get('/tryout/edit/{id}' , [\App\Http\Controllers\adminController::class , 'edittryout'])->name('admin.edittryout');
    Route::post('/tryout/edit/{id}' , [\App\Http\Controllers\adminController::class , 'edittryoutpost'])->name('admin.edittryoutpost');
    Route::get('/tryout/delete/{id}' , [\App\Http\Controllers\adminController::class , 'deletetryout'])->name('admin.deletetryout');

    Route::get('/event/list' , [\App\Http\Controllers\adminController::class , 'eventlist'])->name('admin.listevent');
    Route::get('/event/add' , [\App\Http\Controllers\adminController::class , 'addevent'])->name('admin.addevent');
    Route::post('/event/add' , [\App\Http\Controllers\adminController::class , 'addeventpost'])->name('admin.addeventpost');
    Route::get('/event/edit/{id}' , [\App\Http\Controllers\adminController::class , 'editevent'])->name('admin.editevent');
    Route::post('/event/edit/{id}' , [\App\Http\Controllers\adminController::class , 'editeventpost'])->name('admin.editeventpost');
    Route::get('/event/delete/{id}' , [\App\Http\Controllers\adminController::class , 'deleteevent'])->name('admin.deleteevent');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
