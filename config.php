<?php

return [

    'url' => [
        'base'   => 'http://localhost:8000/index.php',
        'login'  => '/login',
        'app'    => '/app',
        'logout' => '/logout',
    ],

    'database' => [
        'username' => 'root',
        'password' => 'bitnami',
        'host'     => 'localhost',
        'database' => 'ppmasilex',
    ],

    'log' => [
        'writer'  => [
            [
                'id'      => '\ppma\Logger\Writer\EchoWriterImpl',
                'enabled' => true,
            ],
            [
                'id'      => '\ppma\Logger\Writer\ChromeWriterImpl',
                'enabled' => DEV_MODE,
            ],
        ],
    ],

    // services
    'services' => [
        // orm/database services
        'database' => [
            'user'  => [
                'id' => '\ppma\Service\Database\Spot\UserServiceImpl',
            ],
            'entry' => [
                'id' => '\ppma\Service\Database\Spot\EntryServiceImpl',
            ],
        ],

        // response/rendering
        'response' => [
            'html' => [
                'id' => '\ppma\Service\Response\Html\DispatchServiceImpl',
            ],

            'json' => [
                'id' => '\ppma\Service\Response\Json\DispatchServiceImpl',
            ],
        ],

        // session handling
        'session' => [
            'id'   => '\ppma\Service\Session\DispatchServiceImpl',
            'path' => __DIR__ . '/tmp/sessions',
        ],

        // (web)user
        'user' => [
            'id' => '\ppma\Service\User\SessionServiceImpl',
        ]
    ],

    'version' => '1.0.0-alpha',

    // path to views
    'views' => __DIR__ . '/views',

];