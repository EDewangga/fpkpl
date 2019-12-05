<?php

namespace Idy\Yudisium\Domain\Model;

class SyaratYudisium
{
    private $sks;
    private $ipk;
    private $lamaStudi;
    private $nilaiTa;
    
    public function __construct($sks, $ipk, $lamaStudi, $nilaiTa)
    {
        $this->sks = $sks;
        $this->ipk = $ipk;
        $this->lamaStudi = $lamaStudi;
        $this->nilaiTa = $nilaiTa;
    }

    public function sks()
    {
        return $this->sks;
    }

    public function ipk()
    {
        return $this->ipk;
    }

    public function lamaStudi()
    {
        return $this->lamaStudi;
    }

    public function nilaiTa()
    {
        return $this->nilaiTa;
    }

}