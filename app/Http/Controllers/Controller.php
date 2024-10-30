<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Application;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('home');
    }
    public function index_login()
    {
        return view('login');
    }
    /* Funcion para poder mostrar la vista del formulario */
    public function form()
    {
        return view('layouts.formulario');
    }
    /* Funcion para poder buscar en la base de datos en el formulario */
    public function search(Request $request)
    {
        // Validar el input
        $request->validate([
            'Nombre' => 'required|string',
            'Apellidos' => 'required|string',
        ]);

        // Buscar en la base de datos
        $books = Book::where('name', $request->input('Nombre'))
                     ->where('last_name', $request->input('Apellidos'))
                     ->get();

        // Si hay resultados, mostrarlos, de lo contrario, mostrar alerta
        if ($books->isEmpty()) {
            return redirect()->back()->with('error', 'No te encuentras en nuestra base de datos o verifica si tu nombre esta bien escrito.');
        } else {
            return view('layouts.result_formulario', ['books' => $books]);
        }
    }
    /* Mostrar el formulario de solicitud */
    public function showSolicitude(Request $request)
    {
        // Obtener el nombre y apellidos de la solicitud
        $name = $request->input('name');
        $last_name = $request->input('last_name');

        return view('layouts.solicitud', compact('name', 'last_name'));
    }
    /* Funcion para poder buscar en la base de datos en el formulario */
    public function searchSolicitude(Request $request)
    {
        // Validar el input
        $request->validate([
            'Nombre' => 'required|string',
            'Apellidos' => 'required|string',
        ]);

        // Buscar en la base de datos
        $books = Book::where('name', $request->input('Nombre'))
                     ->where('last_name', $request->input('Apellidos'))
                     ->get();

        // Si hay resultados, mostrarlos, de lo contrario, mostrar alerta
        if ($books->isEmpty()) {
            return redirect()->back()->with('error', 'No te encuentras en nuestra base de datos o verifica si tu nombre esta bien escrito.');
        } else {
            return view('layouts.result_formulario', ['books' => $books]);
        }
    }
    /* Funcion para guardar los datos en application */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'father' => 'nullable|string',
            'mom' => 'nullable|string',
            'godfather' => 'nullable|string',
            'godmother' => 'nullable|string',
            'christening' => 'nullable|date',
            'paternal_grandfather' => 'nullable|string',
            'paternal_grandmother' => 'nullable|string',
            'maternal_grandfather' => 'nullable|string',
            'maternal_grandmother' => 'nullable|string',
            'solicitante' => 'nullable|string',
            'address' => [
                'nullable', 
                'string', 
                'regex:/^(calle|carrera|vereda)\s\d+/i'
            ],
            'authenticated' => 'nullable|string',
            'telephone_1' => [
                'required', 
                'string', 
                'regex:/^\d{10}$/'
            ]
        ], [
            'telephone_1.required' => 'El número de teléfono es obligatorio.',
            'telephone_1.regex' => 'Verifica que el número de teléfono tenga exactamente 10 dígitos.',
            'address.regex' => 'La dirección debe comenzar con "calle" o "carrera" y contener un número.',
            'name.required' => 'El nombre es obligatorio.',
            'last_name.required' => 'Los apellidos son obligatorios.',
            'date_of_birth.required' => 'La fecha de nacimiento es obligatoria.'
        ]);
    
        Application::create($validatedData);
    
        return redirect()->route('form.index')->with('success', 'Solicitud enviada exitosamente.');
    }    
}
