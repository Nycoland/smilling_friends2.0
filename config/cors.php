<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:3000'], // Sem barra no final

    'allowed_headers' => ['*'], // Aceita todos os headers

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];