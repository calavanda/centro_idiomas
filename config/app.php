<?php

return [

    'name' => env('APP_NAME', 'Centro de Idiomas'),

    'env' => env('APP_ENV', 'production'),

    'debug' => env('APP_DEBUG', false),

    'debug_allowed_ips' => env('APP_DEBUG_ALLOWED_IPS', null),

    'url' => env('APP_URL', 'http://localhost'),

    'admin_url' => env('APP_ADMIN_URL', 'admin'),

    'timezone' => env('APP_TIMEZONE', 'Asia/Kolkata'),

    'locale' => env('APP_LOCALE', 'es'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'es'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'es_ES'),

    'default_country' => null,

    'currency' => env('APP_CURRENCY', 'MXN'),

    'channel' => 'default',

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store'  => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];