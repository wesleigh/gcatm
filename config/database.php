<?php

return [

    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver'        => 'mysql',
            'host'          => '127.0.0.1',
            'port'          => 3306,
            'database'      => 'wesleigh',
            'username'      => 'root',
            'password'      => 'password',
            'unix_socket'   => '',
            'charset'       => 'utf8mb4',
            'collation'     => 'utf8mb4_unicode_ci',
            'prefix'        => '',
            'strict'        => true,
            'engine'        => null,
        ]
    ],
    'migrations' => 'migrations',
];
