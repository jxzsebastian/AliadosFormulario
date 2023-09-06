<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
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

Route::get('formulario', function () {
    return view('default');
})->name('formulario');

Route::get('listado', function () {
    return view('listado');
})->name('listado');


Route::get('default/', function () {
    return view('home');
});
Route::controller(FormularioController::class)->group(function () {
    Route::post('/default', 'store')->name('formulario-store');
});

Route::get('lista',[FormularioController::class,'index'])->name('lista.index');;
Route::get('lista/{id}',[FormularioController::class,'show'])->name('lista.show');
