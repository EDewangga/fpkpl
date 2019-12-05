
<?php

$namespace = 'Idy\Yudisium\Controllers\Web';

$router->addGet('/yudisium', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'index'
]);

$router->addGet('/yudisium/add', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'add'
]);

$router->addPost('/yudisium/add/new', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'addTest'
]);
