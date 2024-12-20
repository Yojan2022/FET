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

    /* Funciones para los Books */
    // Mostrar la lista de libros
    public function indexbook()
    {
        $books = Book::all();
        return view('layouts.admin.content.books.index', compact('books')); // Retornar la vista con los libros
    }

    // Mostrar el formulario para crear un nuevo libro
    public function createBook()
    {
        return view('layouts.admin.content.books.create'); // Retornar la vista del formulario de creación
    }

    // Almacenar un nuevo libro
    public function storeBook(Request $request)
    {
        // Validar la solicitud con mensajes personalizados
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s]+$/u'],
            'last_name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s]+$/u'],
            'folio' => 'required|integer',
            'page' => 'required|integer',
            'record' => 'required|integer',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no debe exceder 255 caracteres.',
            'name.regex' => 'El nombre solo puede contener letras y espacios.',
    
            'last_name.required' => 'El apellido es obligatorio.',
            'last_name.string' => 'El apellido debe ser una cadena de texto.',
            'last_name.max' => 'El apellido no debe exceder 255 caracteres.',
            'last_name.regex' => 'El apellido solo puede contener letras y espacios.',
    
            'folio.required' => 'El folio es obligatorio.',
            'folio.integer' => 'El folio debe ser un número entero.',
    
            'page.required' => 'El número de páginas es obligatorio.',
            'page.integer' => 'El número de páginas debe ser un número entero.',
    
            'record.required' => 'El número de partidas es obligatorio.',
            'record.integer' => 'El número de partidas debe ser un número entero.',
        ]);
    
        // Crear un nuevo libro
        Book::create($validatedData);
    
        // Redirigir a la lista de libros con un mensaje de éxito
        return redirect()->route('book.index')->with('success', 'Libro agregado correctamente');
    }

    // Mostrar el formulario para editar un libro existente
    public function editBook($id)
    {
        $book = Book::findOrFail($id); // Buscar el libro por ID
        return view('layouts.admin.content.books.edit', compact('book')); // Retornar la vista del formulario de edición
    }

    // Actualizar un libro existente
    public function updateBook(Request $request, $id)
    {
        // Validar los datos ingresados
        $validatedData = $request->validate([
            'name' => 'required|string|regex:/^[\pL\s]+$/u|max:255', // Solo letras y espacios
            'last_name' => 'required|string|regex:/^[\pL\s]+$/u|max:255', // Solo letras y espacios
            'folio' => 'required|integer',
            'page' => 'required|integer',
            'record' => 'required|integer',
        ], [
            // Mensajes de validación personalizados
            'name.regex' => 'El nombre solo puede contener letras y espacios.',
            'last_name.regex' => 'El apellido solo puede contener letras y espacios.',
            'folio.integer' => 'El folio debe ser un número entero.',
            'page.integer' => 'El número de páginas debe ser un número entero.',
            'record.integer' => 'El número de partidas debe ser un número entero.',
        ]);

        // Encontrar el libro por ID y actualizar con los datos validados
        $book = Book::findOrFail($id);
        $book->update($validatedData);

        // Redirigir a la lista de libros con un mensaje de éxito
        return redirect()->route('book.index')->with('success', 'Libro actualizado correctamente.');
    }

    // Eliminar un libro
    public function destroyBook($id)
    {
        $book = Book::findOrFail($id); // Buscar el libro por ID
        $book->delete(); // Borrado suave (soft delete)

        // Redirigir a la lista de libros con un mensaje de éxito
        return redirect()->route('book.index')->with('success', 'Libro eliminado exitosamente.');
    }

    /* Funciones para los Users */
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

    /* Funciones de las Applications */
    // Mostrar la lista de aplicaciones
    public function indexApplications()
    {
        // Obtener todas las aplicaciones
        $applications = Application::all();

        // Retornar la vista de lista de aplicaciones con los datossidebar
        return view('layouts.admin.content.applications.index', compact('applications'));
    }

    // Mostrar el formulario para crear una nueva aplicación
    public function createApplications()
    {
        // Retornar la vista para crear una nueva aplicación
        return view('layouts.admin.content.applications.create');
    }

    // Almacenar una nueva aplicación en la base de datos
    public function storeApplications(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'father' => 'required|string|max:255',
            'mom' => 'required|string|max:255',
            'godfather' => 'required|string|max:255',
            'godmother' => 'required|string|max:255',
            'christening' => 'required|date',
            'solicitante' => 'required|string|max:255',
            'telephone_1' => 'required|numeric',
            'telephone_2' => 'nullable|numeric',
            'address' => 'required|string|max:255',
            'authenticated' => 'required|in:si,no', // Validar que sea sí o no
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'last_name.required' => 'El apellido es obligatorio.',
            'date_of_birth.required' => 'La fecha de nacimiento es obligatoria.',
            'father.required' => 'El nombre del padre es obligatorio.',
            'mom.required' => 'El nombre de la madre es obligatorio.',
            'godfather.required' => 'El nombre del padrino es obligatorio.',
            'godmother.required' => 'El nombre de la madrina es obligatorio.',
            'christening.required' => 'La fecha de bautizo es obligatoria.',
            'solicitante.required' => 'El nombre del solicitante es obligatorio.',
            'telephone_1.required' => 'El teléfono 1 es obligatorio.',
            'address.required' => 'La dirección es obligatoria.',
            'authenticated.required' => 'Es obligatorio seleccionar si está autenticada.',
        ]);

        // Crear la nueva aplicación
        Application::create($validatedData);

        // Redirigir a la lista de aplicaciones con un mensaje de éxito
        return redirect()->route('applications.index')->with('success', 'Aplicación creada correctamente.');
    }

    // Mostrar el formulario para editar una aplicación existente
    public function editApplications($id)
    {
        // Buscar la aplicación por su ID
        $application = Application::findOrFail($id);

        // Retornar la vista de edición con los datos de la aplicación
        return view('layouts.admin.content.applications.edit', compact('application'));
    }

    // Actualizar una aplicación existente en la base de datos
    public function updateApplications(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'father' => 'required|string|max:255',
            'mom' => 'required|string|max:255',
            'godfather' => 'required|string|max:255',
            'godmother' => 'required|string|max:255',
            'christening' => 'required|date',
            'solicitante' => 'required|string|max:255',
            'telephone_1' => 'required|numeric',
            'telephone_2' => 'nullable|numeric',
            'address' => 'required|string|max:255',
            'authenticated' => 'required|in:si,no', // Asegúrate de que solo acepte estos valores
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'last_name.required' => 'El apellido es obligatorio.',
            'date_of_birth.required' => 'La fecha de nacimiento es obligatoria.',
            'father.required' => 'El nombre del padre es obligatorio.',
            'mom.required' => 'El nombre de la madre es obligatorio.',
            'godfather.required' => 'El nombre del padrino es obligatorio.',
            'godmother.required' => 'El nombre de la madrina es obligatorio.',
            'christening.required' => 'La fecha del bautizo es obligatoria.',
            'solicitante.required' => 'El nombre del solicitante es obligatorio.',
            'telephone_1.required' => 'El teléfono 1 es obligatorio.',
            'address.required' => 'La dirección es obligatoria.',
            'authenticated.required' => 'El estado de autenticación es obligatorio.',
        ]);

        // Buscar la aplicación por su ID y actualizar con los datos validados
        $application = Application::findOrFail($id);
        $application->update($validatedData);

        // Redirigir a la lista de aplicaciones con un mensaje de éxito
        return redirect()->route('applications.index')->with('success', 'Aplicación actualizada correctamente.');
    }

    // Eliminar una aplicación de la base de datos
    public function destroyApplications($id)
    {
        // Buscar la aplicación por su ID y eliminarla
        $application = Application::findOrFail($id);
        $application->delete();

        // Redirigir a la lista de aplicaciones con un mensaje de éxito
        return redirect()->route('applications.index')->with('success', 'Aplicación eliminada correctamente.');
    }
}
