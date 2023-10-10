<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'panel'
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $usuario = new User();

        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|confirmed|max:16|min:6',
            'password_confirmation' => 'required',
            'programa_sena' => 'required',
        ]);

        $usuario->name = $request->input('name');
        $usuario->email= $request->input('email');
        $usuario->password= $request->input('password');
        $usuario->password = bcrypt($request->password);
        $usuario->programa_sena= $request->input('programa_sena');

        $usuario->save();

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('listado')
        ->withSuccess('You have successfully registered & logged in!');
    }


    public function authenticate(){
		if (auth()->attempt(request(['email','password'])) == false) {
			return back()->withErrors([
				'message' => 'El correo o contraseña es incorrecto, por favor intente de nuevo!',
			]);
		}
		$usuario = Auth::user();

		return redirect()->route('listado');
	}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index')
            ->withSuccess('You have logged out successfully!');;
    }
}
