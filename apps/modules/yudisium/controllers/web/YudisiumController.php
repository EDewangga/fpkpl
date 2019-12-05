<?php

namespace Idy\Yudisium\Controllers\Web;

use Idy\Common\Controllers\WebController;
use Idy\Yudisium\Application\CreateNewPeriodeYudisiumRequest;

class YudisiumController extends WebController
{
    protected $createNewPeriodeYudisiumService;
    
    public function initialize()
    {
        $this->createNewPeriodeYudisiumService = $this->di->get('createNewPeriodeYudisiumService');
    }

    public function indexAction()
    {
        $r = $this->createNewPeriodeYudisiumService->execute(new CreateNewPeriodeYudisiumRequest(1,2,3,4,5));
        
        // $this->send(['res' => $r]);
        return $this->view->pick('home');
    }

    public function addAction()
    {
        
        return $this->view->pick('add');
    }

    public function addTestAction()
    {
        $this->send($this->request->getPost());
    }

}