<?php

return [

    'enabled' => env('RESPONSE_CACHE_ENABLED', false),

    'cache_profile' => Spatie\ResponseCache\CacheProfiles\CacheAllSuccessfulGetRequests::class,

    'cache_bypass_header' => [
        'name'  => env('CACHE_BYPASS_HEADER_NAME', null),
        'value' => env('CACHE_BYPASS_HEADER_VALUE', null),
    ],

    'cache_lifetime_in_seconds' => env('RESPONSE_CACHE_LIFETIME', 60 * 60 * 24 * 7),

    'add_cache_time_header' => env('APP_DEBUG', true),

    'cache_time_header_name' => env('RESPONSE_CACHE_HEADER_NAME', 'laravel-responsecache'),

    'add_cache_age_header' => env('RESPONSE_CACHE_AGE_HEADER', false),

    'cache_age_header_name' => env('RESPONSE_CACHE_AGE_HEADER_NAME', 'laravel-responsecache-age'),

    'cache_store' => env('RESPONSE_CACHE_DRIVER', 'file'),

    'replacers' => [
        \Spatie\ResponseCache\Replacers\CsrfTokenReplacer::class,
        \Webkul\FPC\Replacers\FlashMessagesReplacer::class,
    ],

    'cache_tag' => '',

    'hasher' => \Webkul\FPC\Hasher\DefaultHasher::class,

    'serializer' => \Spatie\ResponseCache\Serializers\DefaultSerializer::class,
];
