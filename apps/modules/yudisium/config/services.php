<?php
use Idy\Yudisium\Application\CreateNewMahasiswaService;
use Idy\Yudisium\Infrastructure\SqlMahasiswaRepository;
use Idy\Yudisium\Infrastructure\SqlPeriodeYudisiumRepository;
use Idy\Yudisium\Infrastructure\SqlSyaratRepository;
use Idy\Yudisium\Application\CreateNewPeriodeYudisiumService;
use Idy\Yudisium\Application\GetMahasiswaService;
use Idy\Yudisium\Application\GetSyaratService;
use Idy\Yudisium\Application\GetPeriodeYudisiumService;
use Idy\Yudisium\Application\GetPeriodeYudisiumAktifService;
use Idy\Yudisium\Application\GetPeriodeYudisiumTidakAktifService;
use Idy\Yudisium\Application\GetMahasiswaPeriodeService;
use Idy\Yudisium\Application\EditPeriodeYudisiumService;
use Idy\Yudisium\Application\GetYudisiumService;
use Idy\Yudisium\Application\CreateLaporanMahasiswaPeriodeService;

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

$di->setShared('sql_syarat_repository', function () {
    return new SqlSyaratRepository();
});

$di->setShared('sql_mahasiswa_repository', function () {
    return new SqlMahasiswaRepository();
});
$di->set('createNewPeriodeYudisiumService', function () use ($di) {
    return new CreateNewPeriodeYudisiumService($di->get('sql_yudisium_repository'));
});

$di->set('getPeriodeYudisiumService', function () use ($di) {
    return new GetPeriodeYudisiumService($di->get('sql_yudisium_repository'));
});

$di->set('getPeriodeYudisiumAktifService', function () use ($di) {
    return new GetPeriodeYudisiumAktifService($di->get('sql_yudisium_repository'));
});

$di->set('getPeriodeYudisiumTidakAktifService', function () use ($di) {
    return new GetPeriodeYudisiumTidakAktifService($di->get('sql_yudisium_repository'));
});

$di->set('createLaporanMahasiswaPeriodeService', function () use ($di) {
    return new CreateLaporanMahasiswaPeriodeService($di->get('sql_mahasiswa_repository'));
});

$di->set('editPeriodeYudisiumService', function () use ($di) {
    return new editPeriodeYudisiumService($di->get('sql_yudisium_repository'));
});

$di->set('getYudisiumService', function () use ($di) {
    return new GetYudisiumService($di->get('sql_yudisium_repository'));
});

$di->set('getSyaratService', function () use ($di) {
    return new GetSyaratService($di->get('sql_syarat_repository'));
});

$di->set('getMahasiswaService', function () use ($di) {
    return new GetMahasiswaService($di->get('sql_mahasiswa_repository'));
});

$di->set('CreateNewMahasiswaService', function () use ($di) {
    return new CreateNewMahasiswaService($di->get('sql_mahasiswa_repository'), $di->get('sql_syarat_repository'));
});

$di->set('getMahasiswaPeriodeService', function () use ($di) {
    return new GetMahasiswaPeriodeService($di->get('sql_mahasiswa_repository'));
});