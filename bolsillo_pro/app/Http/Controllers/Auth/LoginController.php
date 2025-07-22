<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validar datos de entrada
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        Log::info('Intento de login', ['email' => $request->email]);

        // Intentar login con Auth
        if (Auth::attempt($credentials)) {
            // Login exitoso
            $request->session()->regenerate(); // Seguridad en sesión
            Log::info('Login exitoso', ['email' => $request->email]);

            return response()->json(['message' => 'Login exitoso']);
        }

        Log::warning('Credenciales inválidas', ['email' => $request->email]);

        // Login fallido
        return response()->json(['message' => 'Credenciales inválidas'], 401);
    }
}
