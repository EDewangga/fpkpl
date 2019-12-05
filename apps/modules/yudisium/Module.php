<?php

namespace Idy\Yudisium;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'Idy\Yudisium\Domain\Model' => __DIR__ . '/domain/model',
            'Idy\Yudisium\Infrastructure' => __DIR__ . '/infrastructure',
            'Idy\Yudisium\Infrastructure\Dto' => __DIR__ . '/infrastructure/dto',
            'Idy\Yudisium\Application' => __DIR__ . '/application',
            'Idy\Yudisium\Controllers\Web' => __DIR__ . '/controllers/web',
            'Idy\Yudisium\Controllers\Api' => __DIR__ . '/controllers/api',
            'Idy\Yudisium\Controllers\Validators' => __DIR__ . '/controllers/validators',
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di = null)
    {
        $moduleConfig = require __DIR__ . '/config/config.php';

        $di->get('config')->merge($moduleConfig);

        include_once __DIR__ . '/config/services.php';
    }

}