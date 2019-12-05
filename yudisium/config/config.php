<?php

use Phalcon\Config;

return new Config(
    [
        'database' => [
            'adapter' => getenv('YUDISIUM_DB_ADAPTER'),
            'host' => getenv('YUDISIUM_DB_HOST'),
            'username' => getenv('YUDISIUM_DB_USERNAME'),
            'password' => getenv('YUDISIUM_DB_PASSWORD'),
            'dbname' => getenv('YUDISIUM_DB_NAME'),
        ], 

        'mail' => [
            'driver' => getenv('YUDISIUM_MAIL_DRIVER'),
            'cacheDir' => APP_PATH . "/cache/mail/",
            'fromName' => getenv('YUDISIUM_MAIL_FROM_NAME'),
            'fromEmail' => getenv('YUDISIUM_MAIL_FROM_EMAIL'),
            'smtp' => [
                'server'    => getenv('YUDISIUM_MAIL_SMTP_HOST'),
                'port'      => getenv('YUDISIUM_MAIL_SMTP_PORT'),
                'username'  => getenv('YUDISIUM_MAIL_SMTP_USERNAME'),
                'password'  => getenv('YUDISIUM_MAIL_SMTP_PASSWORD'),
            ],
        ],
    ]
);
