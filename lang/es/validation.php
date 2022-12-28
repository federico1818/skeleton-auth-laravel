<?php

return [

    'email' => ':attribute debe ser una dirección válida.',
    'min' => [
        'string' => ':attribute debe tener al menos :min caracteres.',
    ],
    'required' => ':attribute es obligatorio.',

    'custom' => [
        'password' => [
            'required' => ':attribute es obligatoria.',
            'confirmed' => 'Las contraseñas no coinciden.',
        ],
    ],

    'attributes' => [
        'email' => 'El correo electrónico',
        'name' => 'El nombre',
        'password' => 'La contraseña',
    ],

];
