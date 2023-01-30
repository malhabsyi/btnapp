<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\erd;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::middleware('guest')->group(function(){
    // LOGIN
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::group(['middleware' =>['auth','cekrole:superadmin,admin']],function(){
    //LANDING PAGE
    Route::get('/home', [HomeController::class, 'index']);

    //LOGOUT
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    //DASHBOARD 

});
Route::group(['middleware' =>['auth','cekrole:superadmin']],function(){

    //DASHBOARD ADMIN
    Route::get('/akun',[UserController::class, 'index'])->name('akun');
    Route::get('registrasi-form',[UserController::class, 'create'])->name('registrasi-form');
    Route::post('registrasi',[UserController::class, 'store'])->name('registrasi');
    Route::get('edit-user/{id}',[UserController::class, 'edit']);
    Route::put('update-user/{id}',[UserController::class, 'update']);

    //ERD
    Route::get('/erd', [erd::class, 'index']);

});