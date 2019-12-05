<?php

namespace Idy\Yudisium\Domain\Model;

class PeriodeYudisium
{
    private $wisuda;
    private $urutan;
    private $tanggalAwal;
    private $tanggalAkhir;
    private $status;
    
    public function __construct($wisuda, $urutan, $tanggalAwal, $tanggalAkhir, Status $status)
    {
        $this->wisuda = $wisuda;
        $this->urutan = $urutan;
        $this->tanggalAwal = $tanggalAwal;
        $this->tanggalAkhir = $tanggalAkhir;
        $this->status = $status;
    }

    public function wisuda() 
    {
        return $this->wisuda;
    }

    public function urutan()
    {
        return $this->urutan;
    }

    public function tanggalAwal()
    {
        return $this->tanggalAwal;
    }

    public function tanggalAkhir()
    {
        return $this->tanggalAkhir;
    }

    public function status()
    {
        return $this->status;
    }

}