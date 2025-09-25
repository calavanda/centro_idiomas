<?php

return [

    'pagination' => [
        'limit' => 15,
    ],

    'fractal'    => [
        'params'     => [
            'include' => 'include',
        ],
        'serializer' => League\Fractal\Serializer\DataArraySerializer::class,
    ],

    'cache'      => [
     
        'enabled'    => false,

        'minutes'    => 10080,

        'repository' => 'cache',

        'clean'      => [

            'enabled' => true,

            'on'      => [
                'created' => true,
                'updated' => true,
                'deleted' => true,
            ],
        ],

        'params'     => [
 
            'skipCache' => 'skipCache',
        ],

        'allowed'    => [
            'only'   => null,
            'except' => null,
        ],

        'repositories' => [
            'Webkul\Core\Repositories\CoreConfigRepository' => [
                'enabled' => true,

                // 'minutes'    => 10080,

                // 'clean'      => [
                //     'enabled' => true,

                //     'on'      => [
                //         'created' => true,
                //         'updated' => true,
                //         'deleted' => true,
                //     ]
                // ],

                // 'allowed' => [
                //     'only' => null,

                //     'except' => null
                // ],
            ],

            'Webkul\Core\Repositories\ChannelRepository' => [
                'enabled' => true,
            ],

            'Webkul\Core\Repositories\CountryRepository' => [
                'enabled' => true,
            ],

            'Webkul\Core\Repositories\CountryStateRepository' => [
                'enabled' => true,
            ],

            'Webkul\Core\Repositories\CurrencyRepository' => [
                'enabled' => true,
            ],

            'Webkul\Core\Repositories\LocaleRepository' => [
                'enabled' => true,
            ],
        ],
    ],

    'criteria'   => [
 
        'acceptedConditions' => [
            '=',
            'like',
            'in',
        ],

        'params'             => [
            'search'       => 'search',
            'searchFields' => 'searchFields',
            'filter'       => 'filter',
            'orderBy'      => 'orderBy',
            'sortedBy'     => 'sortedBy',
            'with'         => 'with',
            'searchJoin'   => 'searchJoin',
            'withCount'    => 'withCount',
        ],
    ],

    'generator'  => [
        'basePath'          => app()->path(),
        'rootNamespace'     => 'App\\',
        'stubsOverridePath' => app()->path(),
        'paths'             => [
            'models'       => 'Entities',
            'repositories' => 'Repositories',
            'interfaces'   => 'Repositories',
            'transformers' => 'Transformers',
            'presenters'   => 'Presenters',
            'validators'   => 'Validators',
            'controllers'  => 'Http/Controllers',
            'provider'     => 'RepositoryServiceProvider',
            'criteria'     => 'Criteria',
        ],
    ],
];
