<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\UsersController;

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

Route::get('/welcome', function () {
    return view('index');
});

Route::get('/register1', function () {
    return view('register/register');
});

//----------------- RUTAS - REPARTIDORES -------------------
//----------------- INDEX/LISTAS -----------------------
Route::get('/driver/lista_drivers',[DriversController::class,'drivers'])->name('lista_drivers');
Route::get('/informacion/{id}',[DriversController::class,'informacion'])->name('informacion');
Route::get('/index_driver',[DriversController::class,'perfil'])->name('index_driver');

//------------------ ALTA -------------------------
Route::get('/driver/registro',[DriversController::class,'registro']);
Route::POST('/driver/store',[DriversController::class,'store']);

//---------------- EDITAR/UPDATE ----------------------
Route::get('/editar/{id}',[DriversController::class,'editar'])->name('editar');
Route::put('/guardar/{id}',[DriversController::class,'guardar'])->name('guardar');

//---------------- BORRAR/DELETE ----------------------
Route::delete('/borrar/{id}',[DriversController::class,'borrar'])->name('borrar');
Route::get('/borrar/{id}',[DriversController::class,'borrar'])->name('borrar2');

//----------------- RUTAS - USUARIO -------------------
//----------------- INDEX/LISTAS -----------------------
Route::get('/user/lista_users',[UsersController::class,'users'])->name('lista_users');
Route::get('/informacion_user/{id}',[UsersController::class,'informacion_user'])->name('informacion_user');
Route::get('/index_user',[UsersController::class,'perfil_user'])->name('index_user');

//------------------ ALTA -------------------------
Route::get('/user/registro_user',[UsersController::class,'registro_user']);
Route::POST('/user/store_user',[UsersController::class,'store_user']);

//---------------- EDITAR/UPDATE ----------------------
Route::get('/editar_user/{id}',[UsersController::class,'editar_user'])->name('editar_user');
Route::put('/guardar_user/{id}',[UsersController::class,'guardar_user'])->name('guardar_user');

//---------------- BORRAR/DELETE ----------------------
Route::delete('/borrar/{id}',[UsersController::class,'borrar'])->name('borrar');
Route::get('/borrar/{id}',[UsersController::class,'borrar'])->name('borrar2');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');