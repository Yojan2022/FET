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
            $user->last_login_at = now(); // Usar el helper now() de Laravel
        
            try {
                $user->save(); // Intentar guardar los cambios en la base de datos
            } catch (\Exception $e) {
                // Captura el error y redirige con el mensaje de error
                return redirect()->back()->withErrors(['error' => 'Error al guardar el último inicio de sesión: ' . $e->getMessage()])->withInput();
            }
        
            // Redirigir al usuario a la página principal después de iniciar sesión
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
