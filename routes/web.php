<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;

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

Route::get('/',[App\Http\Controllers\ProductosController::class,'index']);

//Route::get('/administrador',[AdministradorController::class,'index'] );

//Route::get('/administrador/create',[AdministradorController::class,'create']);

Route::resource('administrador', AdministradorController::class)->middleware('auth');

Route::get('/administrador', function () {
    return view('auth.login');
});

Auth::routes(['register'=>false, 'reset'=>false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/administrador', [AdministradorController::class, 'index'])->name('user');  
    Route::get('/home', [AdministradorController::class, 'index'])->name('home');         
});
