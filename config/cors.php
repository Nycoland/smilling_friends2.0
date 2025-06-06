<?php
return[

    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'], // Em produção, restrinja aos seus domínios
    'allowed_headers' => ['*'],
];

?>