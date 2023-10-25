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

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuario-configuracion.datos', compact('usuario'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'country' =>'required',
        ]);
    
        $usuario = User::find($id);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->programa_sena = $request->input('country');
    
        $usuario->save();
    
        return view('usuario-configuracion.datos', compact('usuario'));
    }
}