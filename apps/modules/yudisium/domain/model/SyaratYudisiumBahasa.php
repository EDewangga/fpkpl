<?php

namespace Idy\Yudisium\Domain\Model;

class SyaratYudisiumBahasa
{
    private $skem;
    private $SkorBahasaAsing;
    
    public function __construct($skem, $SkorBahasaAsing)
    {
        $this->sks = $skem;
        $this->ipk = $SkorBahasaAsing;
    }

    public function skem()
    {
        return $this->skem;
    }

    public function SkorBahasaAsing()
    {
        return $this->SkorBahasaAsing;
    }

}