<?php

namespace Idy\Yudisium\Controllers\Web;

use Idy\Common\Controllers\WebController;


class YudisiumController extends WebController
{
    public function indexAction()
    {
        $this->send(['ok' => 'ok']);
        // return $this->view->pick('home');
    }

}