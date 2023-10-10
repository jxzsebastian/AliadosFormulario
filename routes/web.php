<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('default');
});

// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //
Route::get('formulario', function () {
    return view('default');
})->name('formulario');
// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //


// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //
Route::get('/login', [AuthController::class, 'index'])
    ->name('login.index');

Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('login.store');

Route::get('/registrar', [AuthController::class, 'register'])
    ->name('register.index');

Route::post('/registrar', [AuthController::class, 'store'])
    ->name('register.store');

Route::get('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //

// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //
Route::get('listado/',[FormularioController::class,'listado']) ->middleware('auth')->name('listado');
Route::get('listado/{id}/remitir',[FormularioController::class,'remision'])->middleware('auth')->name('usuario.remision');
Route::get('listado/{id}',[FormularioController::class,'mostrarEmprendedor'])->middleware('auth')->name('lista.show');
// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //

// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //

Route::get('remitidos/',[FormularioController::class,'listado_remitidos'])->middleware('auth')->name('usuario.remitidos');
Route::post('remitidos/',[FormularioController::class,'remitir_usuario'])->middleware('auth')->name('usuario.remitir');
// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //

