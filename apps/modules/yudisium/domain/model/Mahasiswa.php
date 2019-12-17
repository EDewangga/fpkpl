<?php

namespace Idy\Yudisium\Domain\Model;

class Mahasiswa
{
    private $nrp;
    private $nama;
    private $ipk;
    private $wisuda;
    private $status;
    
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

    public function status()
    {
        return $this->status;
    }

    public function setStatus(Syarat $syarat)
    {
        if ($syarat->nilai() > $this->ipk) {
            $this->status = 'Tidak Lulus';
        } else {
            $this->status = 'Lulus';
        }
    }
}