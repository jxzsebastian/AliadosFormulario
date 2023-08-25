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

Route::get('default/', function () {
    return view('home');
});
Route::controller(FormularioController::class)->group(function () {
    Route::post('/default', 'store')->name('formulario-store');
});
