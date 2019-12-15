<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Application\GetPeriodeYudisiumTidakAktifResponse;


class GetPeriodeYudisiumTidakAktifService 
{
    private $periodeYudisiumRepository;

    public function __construct(PeriodeYudisiumRepository $periodeYudisiumRepository)
    {
        $this->periodeYudisiumRepository = $periodeYudisiumRepository;
    }

    public function execute()
    {
        $data = $this->periodeYudisiumRepository->tidakAktif();
        
        return new GetPeriodeYudisiumTidakAktifResponse($data);
    }
}