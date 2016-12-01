<?php
/**
 * Settings unique to the environment (i.e. development, production).
 * @author Digital D.Lo <WebDevDLo@gmail.com>
 */

 /** @todo Set sensitive variables during build in a file that is not committed to sourcecode */
 return $settings = [
    'displayErrorDetails' => true,
    'db' => [ // For PDO connection
        'host' => 'localhost',
        'dbname' => 'todo',
        'user' => 'todo',
        'pass' => 'temporary'
        ],
    'orm' => [ // For Eloquent ORM
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'todo',
        'username' => 'todo',
        'password' => 'temporary',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
        ]
    ];
