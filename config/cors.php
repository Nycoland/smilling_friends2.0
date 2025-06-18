<?php

return [
    'paths' => [
        'api/*', 
        'sanctum/csrf-cookie',
        'login',
        'logout',
        'register',
        'user/password'
    ],

    'allowed_methods' => [
        'GET',
        'POST',
        'PUT',
        'PATCH',
        'DELETE',
        'OPTIONS'
    ],

    'allowed_origins' => [
        'http://localhost:3000',
        'http://127.0.0.1:3000'
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => [
        'Content-Type',
        'Authorization',
        'X-Requested-With',
        'Accept',
        'Access-Control-Allow-Origin',
    ],

    'exposed_headers' => [
        'Authorization',
        'X-CSRF-TOKEN'
    ],

    'max_age' => " * ", // 2 horas

    'supports_credentials' => true, // Alterado para true se usar cookies/sessões
];