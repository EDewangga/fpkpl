<?php

namespace Idy\Yudisium\Application;


class CreateNewMahasiswaRequest
{
    private $nrp;
    private $nama;
    private $ipk;
    private $wisuda;
    
    public function __construct($nrp, $nama, $ipk, $wisuda)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->ipk = $ipk;
        $this->wisuda = $wisuda;
    }

    public function nrp() 
    {
        return $this->nrp;
    }

    public function nama()
    {
        return $this->nama;
    }

    public function ipk()
    {
        return $this->ipk;
    }

    public function wisuda()
    {
        return $this->wisuda;
    }
}