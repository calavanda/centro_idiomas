<?php

return [

    'default' => 'jenssegers',

    'except' => ['login', 'register'],

    'table_name' => 'visits',

    'drivers' => [
        'jenssegers' => \Shetabit\Visitor\Drivers\JenssegersAgent::class,
        'UAParser'   => \Shetabit\Visitor\Drivers\UAParser::class,
    ],
];
