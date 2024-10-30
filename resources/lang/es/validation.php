<?php

  return [
    'custom' => [
        'telephone_1' => [
            'required' => 'El número de teléfono es obligatorio.',
            'regex' => 'Verifica que el número de teléfono tenga exactamente 10 dígitos.',
        ],
        'address' => [
            'regex' => 'La dirección debe comenzar con "calle" o "carrera" o "vereda" y contener un número.',
        ],
        'name' => [
            'required' => 'El nombre es obligatorio.',
        ],
        'last_name' => [
            'required' => 'Los apellidos son obligatorios.',
        ],
        'date_of_birth' => [
            'required' => 'La fecha de nacimiento es obligatoria.',
        ],
    ]
  ];