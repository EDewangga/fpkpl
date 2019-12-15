<?php

use Idy\Yudisium\Infrastructure\SqlPeriodeYudisiumRepository;
use Idy\Yudisium\Application\CreateNewPeriodeYudisiumService;
use Idy\Yudisium\Application\GetPeriodeYudisiumService;
use Idy\Yudisium\Application\GetPeriodeYudisiumAktifService;
use Idy\Yudisium\Application\GetPeriodeYudisiumTidakAktifService;

use Phalcon\Mvc\View;

$di['voltServiceMail'] = function($view) use ($di) {

    $config = $di->get('config');

    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
    if (!is_dir($config->mail->cacheDir)) {
        mkdir($config->mail->cacheDir);
    }

    $compileAlways = $config->mode == 'DEVELOPMENT' ? true : false;

    $volt->setOptions(array(
        "compiledPath" => $config->mail->cacheDir,
        "compiledExtension" => ".compiled",
        "compileAlways" => $compileAlways
    ));
    return $volt;
};

$di['view'] = function () {
    $view = new View();
    $view->setViewsDir(__DIR__ . '/../views/');

    $view->registerEngines(
        [
            ".volt" => "voltService",
        ]
    );

    return $view;
};

$di['db'] = function () use ($di) {

    $config = $di->get('config');

    $dbAdapter = $config->database->adapter;

    return new $dbAdapter([
        "host" => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname" => $config->database->dbname
    ]);
};

$di->setShared('sql_yudisium_repository', function () {
    return new SqlPeriodeYudisiumRepository();
});


$di->set('createNewPeriodeYudisiumService', function () use ($di) {
    return new CreateNewPeriodeYudisiumService($di->get('sql_yudisium_repository'));
});

$di->set('getPeriodeYudisiumService', function () use ($di) {
    return new GetPeriodeYudisiumService($di->get('sql_yudisium_repository'));
});

$di->set('GetPeriodeYudisiumAktifService', function () use ($di) {
    return new GetPeriodeYudisiumAktifService($di->get('sql_yudisium_repository'));
});

$di->set('GetPeriodeYudisiumTidakAktifService', function () use ($di) {
    return new GetPeriodeYudisiumTidakAktifService($di->get('sql_yudisium_repository'));
});