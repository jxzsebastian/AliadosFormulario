<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        $mensaje = 'Dato actualizado de manera ';
        $usuario->save();
        return redirect()->back()->with('mensaje', $mensaje);
        return view('usuario-configuracion.datos', compact('usuario'));

    }

    public function updatePassword(Request $request)
    {
        // $request->validate([
        //     'current_password'=>'required',
        //     'new_password' => 'required|min:8|confirmed',
        //     'new_password' =>'required',
        // ]);
        $user = Auth::user();
        $currentPassword = $request->input('current_password');
        // Verificar que la contraseña actual sea válida
        if (Hash::check($currentPassword, $user->password)) {
            $newPassword = $request->input('new_password');
            // Verificar si los campos están en blanco
            if (empty($newPassword)) {
                return redirect()->back()->with('error', 'Por favor, complete todos los campos');
            }
            // Actualizar la contraseña del usuario
            $user->update([
                'password' => Hash::make($newPassword),
            ]);
            return redirect()->back()->with('success', 'Contraseña actualizada con éxito');
        } else {
            return redirect()->back()->with('error', 'La contraseña actual es incorrecta');
        }
    }
}