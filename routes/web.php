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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('test', [App\Http\Controllers\HomeController::class,'test'])->name('test');
    Route::get('/adminDashBoard', [App\Http\Controllers\HomeController::class, 'adminDashBoard'])->name('adminDashBoard');
    Route::get('/excel', [App\Http\Controllers\HomeController::class, 'excel'])->name('excel');
    Route::post('/import',[App\Http\Controllers\customerController::class,'import'])->name('import');
    Route::get('/export-users',[App\Http\Controllers\customerController::class,'exportUsers'])->name('export-users');
    Route::get('/add', [App\Http\Controllers\customerController::class, 'add'])->name('add');
    Route::post('/store', [App\Http\Controllers\customerController::class, 'store'])->name('store');
    Route::get('/edit/{jid}',[App\Http\Controllers\customerController::class,'edit'])->name('edit');
    Route::post('/update/{jid}', [App\Http\Controllers\customerController::class, 'update'])->name('update');
    Route::get('/registeredList',[App\Http\Controllers\customerController::class, 'registeredList'])->name('registeredList');
    Route::get('/alumniMember',[App\Http\Controllers\customerController::class, 'alumniMember'])->name('alumniMember');

});

Route::get('/registration',[App\Http\Controllers\HomeController::class, 'registration'])->name('registration');
Route::post('/pay',[App\Http\Controllers\HomeController::class, 'pay'])->name('pay');

