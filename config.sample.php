<?php

return [

    'database' => [
        'host'     => '127.0.0.1',
        'name'     => 'ppma',
        'username' => 'root',
        'password' => ''
    ],

    'mail' => [
        'from' => 'ppma@pklink.github.com',
        'smtp' => [
            'host'     => 'smtp.mailgun.org',
            'port'     => 587,
            'username' => 'postmaster@domain.com',
            'password' => '',
            'tls'      => true,
        ],
        'dryrun'   => false
    ],

    'log' => [
        'writer'  => [
            [
                'id'      => '\ppma\Logger\Writer\EchoWriterImpl',
                'enabled' => false,
            ],
            [
                'id'      => '\ppma\Logger\Writer\FileWriterImpl',
                'enabled' => false,
                'path'    => __DIR__ . '/runtime/logs/application.log',
                'level'   => ['error', 'warn'], // error, warn, info, debug
            ]
        ],
    ],

    'testing' => [
        'mail' => [
            'recipient' => 'yourmail@domain.com',
        ]
    ],

    'dev-mode' => true,
    'version'  => '1.0.0-alpha',

];