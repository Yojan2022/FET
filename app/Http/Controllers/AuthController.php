<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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
        $user = Auth::user(); // Obtener el usuario autenticado

        // Comprobar si el usuario ya ha iniciado sesión anteriormente
        $lastLogin = $user->last_login_at;

        // Si es la primera vez que inicia sesión, el campo last_login_at será null
        if ($lastLogin === null) {
            // Guardamos la fecha actual como su primer inicio de sesión
            $user->last_login_at = Carbon::now();
            $message = 'Esta es tu primera vez iniciando sesión.';
        } else {
            // Si ya ha iniciado sesión antes, actualizar la última fecha de login
            $user->last_login_at = Carbon::now();
            $message = 'Último inicio de sesión: ' . $lastLogin->format('d-m-Y H:i:s');
        }

        try {
            $user->save(); // Guardamos los cambios
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error al guardar el último inicio de sesión: ' . $e->getMessage()])->withInput();
        }

        // Almacenamos el mensaje en la sesión
        session()->flash('last_login', $message);

        // Redirigir al usuario a la página principal o a la página previa
        return redirect()->intended('/admin');
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
