<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'books'; // Define el nombre de la tabla correspondiente en la base de datos

    /**
     * Atributos que son asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',        // Nombre de la persona
        'last_name',   // Apellidos de la persona
        'folio',       // Número de folio en el que está registrado el libro
        'page',        // Número de la página donde se encuentra el libro
        'record'       // Número de partida o registro del libro
    ];
}
