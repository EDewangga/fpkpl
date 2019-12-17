<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\MahasiswaRepository;
use Idy\Yudisium\Application\CreateNewMahasiswaResponse;
use Idy\Yudisium\Domain\Model\Mahasiswa;
use Idy\Yudisium\Domain\Model\Wisuda;


class CreateNewMahasiswaService 
{
    private $mahasiswaRepository;

    public function __construct(MahasiswaRepository $mahasiswaRepository)
    {
        $this->mahasiswaRepository = $mahasiswaRepository;
    }

    public function execute(CreateNewMahasiswaRequest $request)
    {
        $mhs = new Mahasiswa($request->nrp(), $request->nama(), $request->ipk(), new Wisuda($request->wisuda()));
        $response = $this->mahasiswaRepository->create($mhs);
        

        if ($response) {
            return new CreateNewMahasiswaResponse("Periode yudisium berhasil ditambahkan!");
        }

        return new CreateNewMahasiswaResponse("Terjadi error", 500);
    }
}