<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function index($id){
        $usuario = User::findOrFail($id);

        return view('usuario-configuracion.datos', compact('usuario'));
    }
}
