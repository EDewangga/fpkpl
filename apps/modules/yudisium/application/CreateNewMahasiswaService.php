<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\MahasiswaRepository;
use Idy\Yudisium\Application\CreateNewMahasiswaResponse;
use Idy\Yudisium\Domain\Model\Mahasiswa;
use Idy\Yudisium\Domain\Model\Syarat;
use Idy\Yudisium\Domain\Model\SyaratRepository;
use Idy\Yudisium\Domain\Model\Wisuda;


class CreateNewMahasiswaService 
{
    private $mahasiswaRepository;
    private $syaratRepository;

    public function __construct(MahasiswaRepository $mahasiswaRepository, SyaratRepository $syaratRepository)
    {
        $this->mahasiswaRepository = $mahasiswaRepository;
        $this->syaratRepository = $syaratRepository;
    }

    public function execute(CreateNewMahasiswaRequest $request)
    {
        $mhs = new Mahasiswa($request->nrp(), $request->nama(), $request->ipk(), new Wisuda($request->wisuda()));
        $syarats = $this->syaratRepository->all();
        $listSyarat = array();
        foreach ($syarats as $syarat) {
            $s = new Syarat($syarat['ID'], $syarat['namasyarat'], $syarat['nilai']);
            $listSyarat[$syarat['namasyarat']] = $s;
        }

        $mhs->setStatus($listSyarat['IPK']);

        $response = $this->mahasiswaRepository->create($mhs);
        

        if ($response) {
            return new CreateNewMahasiswaResponse("Periode yudisium berhasil ditambahkan!");
        }

        return new CreateNewMahasiswaResponse("Terjadi error", 500);
    }
    
}