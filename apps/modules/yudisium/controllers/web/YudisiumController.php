<?php

namespace Idy\Yudisium\Controllers\Web;

use Idy\Common\Controllers\WebController;
use Idy\Yudisium\Application\CreateLaporanMahasiswaPeriodeRequest;
use Idy\Yudisium\Application\CreateLaporanPeriodeYudisiumRequest;
use Idy\Yudisium\Application\CreateNewMahasiswaRequest;
use Idy\Yudisium\Application\CreateNewPeriodeYudisiumRequest;
use Idy\Yudisium\Application\EditPeriodeYudisiumRequest;
use Idy\Yudisium\Domain\Model\PeriodeYudisium;

class YudisiumController extends WebController
{
    protected $createNewPeriodeYudisiumService;
    protected $getPeriodeYudisiumService;
    protected $getPeriodeYudisiumAktifService;
    protected $GetPeriodeYudisiumTidakAktifService;
    protected $createLaporanPeriodeYudisiumService;
    protected $getSyaratService;
    protected $getMahasiswaService;
    protected $CreateNewMahasiswaService;
    protected $getMahasiswaPeriodeService;
    protected $editPeriodeYudisiumService;
    protected $GetYudisiumService;
    protected $CreateLaporanMahasiswaPeriodeService;
    
    
    
    public function initialize()
    {
        $this->createNewPeriodeYudisiumService = $this->di->get('createNewPeriodeYudisiumService');
        $this->getPeriodeYudisiumService = $this->di->get('getPeriodeYudisiumService');
        $this->getPeriodeYudisiumAktifService = $this->di->get('getPeriodeYudisiumAktifService');
        $this->getPeriodeYudisiumTidakAktifService = $this->di->get('getPeriodeYudisiumTidakAktifService');
        $this->getSyaratService = $this->di->get('getSyaratService');
        $this->getMahasiswaService = $this->di->get('getMahasiswaService');
        $this->CreateNewMahasiswaService = $this->di->get('CreateNewMahasiswaService');
        $this->getMahasiswaPeriodeService = $this->di->get('getMahasiswaPeriodeService');
        $this->editPeriodeYudisiumService = $this->di->get('editPeriodeYudisiumService');      
        $this->GetYudisiumService = $this->di->get('getYudisiumService');      
        $this->CreateLaporanMahasiswaPeriodeService = $this->di->get('createLaporanMahasiswaPeriodeService');      
        $this->createLaporanPeriodeYudisiumService = $this->di->get('createLaporanMahasiswaPeriodeService');
    }

    public function indexAction()
    {
        $this->view->datas = $this->getPeriodeYudisiumService->execute();
        return $this->view->pick('home');
    }

    public function aktifAction()
    {
        $this->view->datas = $this->getPeriodeYudisiumAktifService->execute();
        return $this->view->pick('aktif');
    }

    public function tidakAktifAction()
    {
        $this->view->datas = $this->getPeriodeYudisiumTidakAktifService->execute(); 
        return $this->view->pick('tidakAktif');
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

    public function createLaporanAction($wisuda)
    {
        $request = new CreateLaporanMahasiswaPeriodeRequest($wisuda);
        $response = $this->createLaporanPeriodeYudisiumService->execute($request);
        $this->send($response);
    }
    
    public function syaratAction()
    {
        $this->view->datas = $this->getSyaratService->execute();
        return $this->view->pick('syarat');
    }

    public function mahasiswaAction()
    {
        $this->view->datas = $this->getMahasiswaService->execute();
        return $this->view->pick('mahasiswa');
    }

    public function createMahasiswaAction()
    {   
        return $this->view->pick('addMahasiswa');
    }

    public function createMahasiswaPostAction()
    {
        $nrp = $this->request->getPost('nrp');
        $nama = $this->request->getPost('nama');
        $ipk = $this->request->getPost('ipk');
        $wisuda = $this->request->getPost('wisuda');
        $request = new CreateNewMahasiswaRequest($nrp, $nama, $ipk, $wisuda);
        // return $nrp. $nama. $ipk. $wisuda;

        $response = $this->CreateNewMahasiswaService->execute($request);
        $code = $response->getCode();

        if ($code == 200) {
            $this->flashSession->success($response->getResponse());
        } else {
            $this->flashSession->error($response->getResponse());
        }

        $this->response->redirect('/mahasiswa/add');
        // return $response->getResponse();
    }

    public function getWisudaAction($wisuda)
    {
        $data = $this->getMahasiswaPeriodeService->execute($wisuda);
        $this->view->datas = $data;
        $this->view->wisuda = $wisuda;
        // return $this->send(['ok'=> $data->getResponse()]);
        return $this->view->pick('mahasiswaPeriode');
    }

    public function editPostAction()
    {
        $wisuda = $this->request->getPost('wisuda');
        $urutan = $this->request->getPost('urutan');
        $tanggalawal = $this->request->getPost('tanggalawal');
        $tanggalakhir = $this->request->getPost('tanggalakhir');
        $status = $this->request->getPost('status');
        // return $wisuda. $urutan. $tanggalawal. $tanggalakhir. $status;
        $request = new EditPeriodeYudisiumRequest($wisuda, $urutan, $tanggalawal, $tanggalakhir, $status);

        $response = $this->editPeriodeYudisiumService->execute($request);
        $code = $response->getCode();

        if ($code == 200) {
            $this->flashSession->success($response->getResponse());
        } else {
            $this->flashSession->error($response->getResponse());
        }

        $this->response->redirect('/yudisium/edit/'.$wisuda);

        // return $response->getResponse();
    }

    public function editAction($yudisium)
    {   
        $data = $this->GetYudisiumService->execute($yudisium);
        $this->view->datas = $data->getResponse();
        
        // return $this->send($data->getResponse());
        return $this->view->pick('edit');
    }


}