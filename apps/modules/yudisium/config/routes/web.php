
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
    'action' => 'aktif'
]);

$router->addGet('/yudisium/tidak-aktif', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'tidakAktif'
]);

$router->addGet('/mahasiswa/{wisuda}/create-laporan', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'createLaporan'
]);

$router->addGet('/yudisium/edit/{yudisium}', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'edit'
]);

$router->addPost('/yudisium/edit/post', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'editPost'
]);

$router->addGet('/syarat', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'syarat'
]);

$router->addGet('/mahasiswa', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'mahasiswa'
]);

$router->addGet('/mahasiswa/add', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'createMahasiswa'
]);

$router->addPost('/mahasiswa/add/post', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'createMahasiswaPost'
]);

$router->addGet('/yudisium/mahasiswa/{wisuda}', [
    'namespace' => $namespace,
    'module' => 'yudisium',
    'controller' => 'yudisium',
    'action' => 'getWisuda'
]);


