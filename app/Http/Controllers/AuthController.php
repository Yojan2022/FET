<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar la solicitud de login
    public function login(Request $request)
    {
        // Validar las credenciales de entrada
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        // Si la validación falla, redirigir con errores
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Obtener las credenciales
        $credentials = $request->only('username', 'password');

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $lastLogin = $user->last_login_at; // Guardamos la última fecha de inicio de sesión

            // Actualizamos la última fecha de login a la fecha actual
            $user->last_login_at = now();
            
            try {
                $user->save(); // Guardamos los cambios
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Error al guardar el último inicio de sesión: ' . $e->getMessage()])->withInput();
            }

            // Almacenamos el mensaje de la última conexión en la sesión
            $lastLogin = $user->last_login_at;

            session()->flash('last_login', $lastLogin ? $lastLogin->format('d-m-Y H:i:s') : 'Esta es tu primera vez iniciando sesión.');

            // Redirigir al usuario a la página principal
            return redirect()->intended('/');
        }

        // Redirigir de vuelta si las credenciales son incorrectas
        return redirect()->back()->withErrors(['error' => 'Credenciales incorrectas'])->withInput();
    }

    // Procesar el logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Redirigir a la página de inicio después de cerrar sesión
        return redirect('/');
    }
}
