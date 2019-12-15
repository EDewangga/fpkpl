
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

$router->addPost('/yudisium/add/post', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'addPost'
]);

$router->addGet('/yudisium/aktif', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'Aktif'
]);

$router->addGet('/yudisium/tidakAktif', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'tidakAktif'
]);
