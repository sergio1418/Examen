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
// aqui se crea las rutas para poder manipular la vista y los controladores

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('costumers', CostumerController::class)->middleware('auth');;

// tambien se debe de instalar el programa laragon
// donde se usa Mysql donde se almacena la base de datos 
// tambien cuenta con la base de datos que se ubica en la carpeta "BASE DE DATOS/SCRIPTS"
