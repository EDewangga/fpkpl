<?php

namespace Idy\Yudisium\Controllers\Web;

use Idy\Common\Controllers\WebController;
use Idy\Yudisium\Application\CreateNewPeriodeYudisiumRequest;
use Idy\Yudisium\Domain\Model\PeriodeYudisium;

class YudisiumController extends WebController
{
    protected $createNewPeriodeYudisiumService;
    
    public function initialize()
    {
        $this->createNewPeriodeYudisiumService = $this->di->get('createNewPeriodeYudisiumService');
    }

    public function indexAction()
    {
        // $r = $this->createNewPeriodeYudisiumService->execute(new CreateNewPeriodeYudisiumRequest(1, 2, 3, 4, 5));
        
        // $this->send(['res' => $r]);
        // $this->view->datas = $datas;
        return $this->view->pick('home');
    }

    public function addPostAction()
    {
        $wisuda = $this->request->getPost('wisuda');
        $urutan = $this->request->getPost('urutan');
        $tanggalawal = $this->request->getPost('tanggalawal');
        $tanggalakhir = $this->request->getPost('tanggalakhir');
        $status = $this->request->getPost('status');
        // return $wisuda. $urutan. $tanggalawal. $tanggalakhir. $status;
        $request = new CreateNewPeriodeYudisiumRequest($wisuda, $urutan, $tanggalawal, $tanggalakhir, $status);


        $response = $this->createNewPeriodeYudisiumService->execute($request);
        $code = $response->getCode();

        if ($code == 200) {
            $this->flashSession->success($response->getResponse());
        } else {
            $this->flashSession->error($response->getResponse());
        }

        $this->response->redirect('/yudisium/add');

        // return $response->getResponse();
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