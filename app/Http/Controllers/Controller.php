<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Book;

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
            return view('books.results', ['books' => $books]);
        }
    }
}
