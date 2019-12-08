<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Application\GetPeriodeYudisiumResponse;


class GetPeriodeYudisiumService 
{
    private $periodeYudisiumRepository;

    public function __construct(PeriodeYudisiumRepository $periodeYudisiumRepository)
    {
        $this->periodeYudisiumRepository = $periodeYudisiumRepository;
    }

    public function execute()
    {
        $data = $this->periodeYudisiumRepository->all();

        return new GetPeriodeYudisiumResponse($data);
    }
}