<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\MahasiswaRepository;
use Idy\Yudisium\Application\GetMahasiswaResponse;


class GetMahasiswaService 
{
    private $mahasiswaRepository;

    public function __construct(MahasiswaRepository $mahasiswaRepository)
    {
        $this->mahasiswaRepository = $mahasiswaRepository;
    }

    public function execute()
    {
        $data = $this->mahasiswaRepository->all();
        
        return new GetMahasiswaResponse($data);
    }
}