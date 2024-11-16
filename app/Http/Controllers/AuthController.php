<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|min:2|max:255',
            'apellido_paterno' => 'required|string|min:2|max:255',
            'apellido_materno' => 'required|string|min:2|max:255',
            'fecha_nacimiento' => 'required|date',
            'correo' => 'required|string|email|max:255|unique:usuario',
            'contrasena' => 'required|string|min:8|confirmed',
            ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        usuario::create([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'correo' => $request->correo,
            'contrasena' => Hash::make($request->password),
        ]);
        return redirect()->route('login')->with('success', 'Usuario registrado correctamente.');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|string|email',
            'contrasena' => 'required|string'
        ]);
        if (auth()->attempt(['correo' => $request->correo, 'contrasena' => $request->contrasena])) {
            if (Auth::usuario()->role === 'admin'){
                return redirect()->route('inicio_admin')->with('success', 'Inicio de sesión.');
            }
            return redirect()->route('inicio')->with('success', 'Sesión iniciada.');
        }
        return redirect()->back()->withErrors(['email' => 'Inncorrect credencials.']);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'Saliste de la sesión.');
    }
}
