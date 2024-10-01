<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'applications'; // Define el nombre de la tabla correspondiente en la base de datos

    /**
     * Atributos que son asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',                    // Nombre de la persona en la solicitud
        'last_name',               // Apellidos de la persona en la solicitud
        'date_of_birth',           // Fecha de nacimiento de la persona
        'father',                  // Nombre del padre
        'mom',                     // Nombre de la madre
        'godfather',               // Nombre del padrino
        'godmother',               // Nombre de la madrina
        'christening',             // Información sobre el bautizo
        'paternal_grandfather',    // Nombre del abuelo paterno
        'paternal_grandmother',    // Nombre de la abuela paterna
        'maternal_grandfather',    // Nombre del abuelo materno
        'maternal_grandmother',    // Nombre de la abuela materna
        'solicitante',             // Persona que solicita la aplicación
        'telephone_1',             // Primer número de teléfono de contacto
        'telephone_2',             // Segundo número de teléfono de contacto (puede ser nulo)
        'address',                 // Dirección de residencia
        'authenticated'            // Estado de autenticación de la solicitud
    ];
}
