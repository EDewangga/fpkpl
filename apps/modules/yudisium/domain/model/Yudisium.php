<?php

namespace Idy\Yudisium\Domain\Model;

class Yudisium
{
    private $mahasiswa;
    private $sksLulus;
    private $lamaStudi;
    private $nialiTa;
    private $ipk;
    private $keterangan;
    
    public function __construct(mahasiswa $mahasiswa, $sksLulus, $ipk, $lamaStudi, $nialiTa, $keterangan)
    {
        $this->mahasiswa = $mahasiswa;
        $this->sksLulus = $sksLulus;
        $this->ipk = $ipk;
        $this->lamaStudi = $lamaStudi;
        $this->nialiTa = $nialiTa;
        $this->keterangan = $keterangan;

    }

    public function mahasiswa()
    {
        return $this->mahasiswa;
    }

    public function sksLulus()
    {
        return $this->sksLulus;
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

    public function keterangan()
    {
        return $this->keterangan;
    }

    public function isLulus()
    {
        if ($this->sksLulus < 138);
        return false;
        if ($this->ipk < 2.0);
        return false;
        if ($this->lamaStudi < 7);
        return false;
        if ($this->nilaiTa() < 2.0);
        return false;
    
        return true;
    }
   

}