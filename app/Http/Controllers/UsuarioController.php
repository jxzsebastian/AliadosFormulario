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
        if (auth()->id() == $id) {
            $usuario = User::findOrFail($id);
            return view('usuario-configuracion.datos', compact('usuario'));
        }else{
            abort(404);
        }

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'programaSena' =>'required',
        ]);

        $usuario = User::find($id);
        $nombre = $request->input('name');
        $email = $request->input('email');
        $programa_sena = $request->input('programaSena');

        if (empty($nombre) || empty($email)) {
            return redirect()->back()->with('error', 'Por favor, complete todos los campos');
        } else {
            // Verificar si los valores son iguales a los existentes en la base de datos
            if ($nombre == $usuario->name && $email == $usuario->email && $programa_sena == $usuario->programa_sena) {
                return redirect()->back()->with('errorr', 'No se han realizado cambios en los datos');
            }

            // Verificar si el email ya está siendo utilizado por otro usuario
            $existingUser = User::where('email', $email)->where('id', '!=', $id)->first();
            if ($existingUser) {
                return redirect()->back()->with('errorr', 'El email ya está siendo utilizado por otro usuario');
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
        $request->validate([
			'contrasena_actual' => 'required',
			'nueva_contrasena' => 'required|min:8|same:confirmacion_contrasena',
			'confirmacion_contrasena' => 'required',
		]);

        $currentPassword = $request->input('contrasena_actual');
        $newPassword = $request->input('nueva_contrasena');
        $confirmacion_contrasena = $request->input('confirmacion_contrasena');

        if (!Hash::check($request->contrasena_actual, $user->password)) {
			return back()->withErrors(['contrasena_actual' => 'La contraseña actual es incorrecta.']);
		}

        $user->update([
			'password' => Hash::make($request->nueva_contrasena),
		]);

		return redirect()->back()->with('success', 'ok');

}

}
