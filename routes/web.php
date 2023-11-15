<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RemisionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('default');
});

// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //
Route::get('/formulario', function () {
    return view('default');
})->name('formulario');
// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //


// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //
Route::get('/auth', [AuthController::class, 'index'])
    ->name('login.index');

Route::post('/auth', [AuthController::class, 'authenticate'])
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
Route::get('listado/{id}',[FormularioController::class,'mostrarEmprendedor'])->middleware('auth')->name('lista.show');
// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //

// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //
Route::get('listado/{id}/remitir',[RemisionController::class,'remision'])->middleware('auth')->name('usuario.remision');
Route::get('remitidos',[RemisionController::class,'listado_remitidos'])->middleware('auth')->name('usuario.remitidos');
Route::post('remitidos/',[RemisionController::class,'remitir_usuario'])->middleware('auth')->name('usuario.remitir');
Route::post('remitidos/update/{id}',[RemisionController::class,'update_remision'])->middleware('auth')->name('remision.update');
Route::post('remitidos/update/estado/{id}',[RemisionController::class,'update_remision_estado'])->middleware('auth')->name('remision.update-estado');

// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //

Route::get('/marcar_notificaciones', [NotificationController::class, 'markAllNotifications'])->name('marcar.notificaciones');
Route::get('/marcar_notificacion/{notification_id}', [NotificationController::class, 'markOneNotification'])->name('marcar.notificacion');

// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //


// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //
Route::put('/configuracion/perfil/{id}',  [UsuarioController::class, 'update'])->name('actualizado');
Route::post('/configuracion/perfil/{id}',  [UsuarioController::class, 'updatePassword'])->name('contra');
Route::get('/configuracion/perfil/{id}', [UsuarioController::class, 'index'])->name('usuario.configuracion');


// ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- //

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('password/reset', 'auth.passwords.email')->name('password.request');

