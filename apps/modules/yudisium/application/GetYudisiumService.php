<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Domain\Model\PeriodeYudisium;
use Idy\Yudisium\Domain\Model\Status;
use Idy\Yudisium\Application\GetYudisiumResponse;
use Idy\Yudisium\Domain\Model\Wisuda;

class GetYudisiumService
{
    private $periodeYudisiumRepository;

    public function __construct(PeriodeYudisiumRepository $periodeYudisiumRepository)
    {
        $this->periodeYudisiumRepository = $periodeYudisiumRepository;
    }

    public function execute($id)
    {
        $wisuda = new Wisuda($id);
        $data = $this->periodeYudisiumRepository->getYudisium($wisuda);
        
        return new GetYudisiumResponse($data);
    }
}