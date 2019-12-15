<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Application\GetPeriodeYudisiumAktifResponse;


class GetPeriodeYudisiumAktifService 
{
    private $periodeYudisiumRepository;

    public function __construct(PeriodeYudisiumRepository $periodeYudisiumRepository)
    {
        $this->periodeYudisiumRepository = $periodeYudisiumRepository;
    }

    public function execute()
    {
        $data = $this->periodeYudisiumRepository->aktif();
        
        return new GetPeriodeYudisiumAktifResponse($data);
    }
}