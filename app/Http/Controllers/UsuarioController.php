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
        $nombre = $request->input('name');
        $email = $request->input('email');
        $programa_sena = $request->input('country');
        
        if (empty($nombre) || empty($email) || empty($programa_sena)) {
            return redirect()->back()->with('error', 'Por favor, complete todos los campos');
        } else {
            // Verificar si los valores son iguales a los existentes en la base de datos
            if ($nombre == $usuario->name && $email == $usuario->email && $programa_sena == $usuario->programa_sena) {
                return redirect()->back()->with('errorr', 'No se han realizado cambios en los datos');
            }
        
            // Verificar si el email ya está siendo utilizado por otro usuario
            $existingUser = User::where('email', $email)->where('id', '!=', $id)->first();
            if ($existingUser) {
                return redirect()->back()->with('errorr', 'El email ingresado ya está siendo utilizado por otro usuario');
            }
        
            // Aquí puedes colocar el código que deseas ejecutar si los valores no están vacíos, son diferentes a los existentes en la base de datos y el email no está siendo utilizado por otro usuario
            $usuario->name = $nombre;
            $usuario->email = $email;
            $usuario->programa_sena = $programa_sena;
            $usuario->save();
        
            return redirect()->back()->with('successs', 'Datos del Usuario actualizados con éxito');
        }
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $request->input('current_password');
        $newPassword = $request->input('new_password');
        $new_password_confirmation = $request->input('new_password_confirmation');

        if (!empty($currentPassword) && !empty($newPassword) && !empty($new_password_confirmation)) {
            # code...
            if (Hash::check($currentPassword, $user->password)) {
                // El campo current_password coincide con la contraseña guardada en la base de datos
                if ($newPassword == $new_password_confirmation) {
                    // Las contraseñas coinciden, continuar con el código
                    $user->update([
                        'password' => Hash::make($newPassword),
                    ]);
                    return redirect()->back()->with('success', 'Contraseña actualizada con éxito');
                } else {
                    // Mostrar error porque las contraseñas no coinciden
                    return redirect()->back()->with('error', 'las contrseñas no son Iguales Verifique Los Datos Ingresados');
                }
            } else {
                // Mostrar error porque el campo current_password no coincide con la contraseña guardada
                return redirect()->back()->with('error', 'La contraseña actual es incorrecta');
            }
        }else {
            # code...
            return redirect()->back()->with('error', 'Por favor, complete todos los campos');
        }

}

}