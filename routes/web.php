<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;

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
    return view('servicio.index');
});

Route::get('/Qsomos', function () {
    return view('servicio.QueSomos');
});

Route::resource('servicio', ServicioController::class); 

Auth::routes();

Route::get('/home', [ServicioController::class, 'index'])->name('home');

/*Route::middleware(['middleware', 'auth'], function(){
    Route::get('/home',[ServicioController::class, 'index'])->name('home');
});*/