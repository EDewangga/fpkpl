<?php

return array(
    'yudisium' => [
        'namespace' => 'Idy\Yudisium',
        'webControllerNamespace' => 'Idy\Yudisium\Controllers\Web',
        'apiControllerNamespace' => 'Idy\Yudisium\Controllers\Api',
        'className' => 'Idy\Yudisium\Module',
        'path' => APP_PATH . '/modules/yudisium/Module.php',
        'defaultRouting' => false,
        'defaultController' => 'yudisium',
        'defaultAction' => 'index',
        'moduleRouting' => true
    ],

);