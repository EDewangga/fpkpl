<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Application\GetPeriodeYudisiumLulusResponse;


class GetPeriodeYudisiumLulusService 
{
    private $periodeYudisiumRepository;

    public function __construct(PeriodeYudisiumRepository $periodeYudisiumRepository)
    {
        $this->periodeYudisiumRepository = $periodeYudisiumRepository;
    }

    public function execute()
    {
        $data = $this->periodeYudisiumRepository->lulus();
        
        return new GetPeriodeYudisiumLulusResponse($data);
    }
}