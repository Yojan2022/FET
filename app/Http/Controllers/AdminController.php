<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\application;
use App\Models\book;
use Carbon\Carbon;

class AdminController extends Controller
{
    /* funcion de prueba - se puede eliminar */
    public function admin()
    {
        return view('layouts.admin.content.old');
    }

    // Vista inicial de administrador
    public function dashboard()
    {
        $userCount = User::count();
        $bookCount = book::count();
        $applicationCount = application::count();

        return view('layouts.admin.content.dashboard', compact('userCount', 'bookCount', 'applicationCount'));
    }

    // Listar todos los usuarios
    public function indexUsers()
    {
        $users = User::all();

        // Formatear last_login_at para cada usuario
        foreach ($users as $user) {
            $user->last_login_human = Carbon::parse($user->last_login_at)->diffForHumans();
        }

        return view('layouts.admin.content.users.index', compact('users'));
    }

    // Mostrar formulario de creación de usuario
    public function createUser()
    {
        return view('layouts.admin.content.users.create');
    }

    // Guardar un nuevo usuario
    public function storeUser(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
    }

    // Mostrar formulario de edición de usuario
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('layouts.admin.content.users.edit', compact('user'));
    }

    // Actualizar los datos de un usuario
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed'
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->email = $request->email;
        
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    // Eliminar un usuario
    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
