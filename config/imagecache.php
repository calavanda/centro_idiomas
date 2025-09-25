<?php

return [

    'route' => 'cache',

    'paths' => [
        storage_path('app/public'),
        public_path('storage'),
    ],

    'templates' => [
        'small'  => 'Webkul\Shop\CacheFilters\Small',
        'medium' => 'Webkul\Shop\CacheFilters\Medium',
        'large'  => 'Webkul\Shop\CacheFilters\Large',
    ],

    'lifetime' => 525600,
];
