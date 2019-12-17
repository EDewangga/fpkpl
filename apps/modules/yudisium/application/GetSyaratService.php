<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\SyaratRepository;
use Idy\Yudisium\Application\GetSyaratResponse;


class GetSyaratService 
{
    private $syaratRepository;

    public function __construct(SyaratRepository $syaratRepository)
    {
        $this->syaratRepository = $syaratRepository;
    }

    public function execute()
    {
        $data = $this->syaratRepository->all();
        
        return new GetSyaratResponse($data);
    }
}