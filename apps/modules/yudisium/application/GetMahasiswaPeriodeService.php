<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\MahasiswaRepository;
use Idy\Yudisium\Application\GetMahasiswaPeriodeResponse;
use Idy\Yudisium\Domain\Model\Wisuda;

class GetMahasiswaPeriodeService 
{
    private $mahasiswaRepository;

    public function __construct(MahasiswaRepository $mahasiswaRepository)
    {
        $this->mahasiswaRepository = $mahasiswaRepository;
    }

    public function execute($id)
    {
        $wisuda = new Wisuda($id);
        $data = $this->mahasiswaRepository->mahasiswaInPeriodeYudisium($wisuda);
        
        return new GetMahasiswaPeriodeResponse($data);
    }
}