<?php

namespace Idy\Yudisium\Domain\Model;

class PeriodeYudisium
{
    private $wisuda;
    private $urutan;
    private $tanggalawal;
    private $tanggalakhir;
    private $status;
    
    public function __construct($wisuda, $urutan, $tanggalawal, $tanggalakhir, Status $status)
    {
        $this->wisuda = $wisuda;
        $this->urutan = $urutan;
        $this->tanggalawal = $tanggalawal;
        $this->tanggalakhir = $tanggalakhir;
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

    public function tanggalawal()
    {
        return $this->tanggalawal;
    }

    public function tanggalakhir()
    {
        return $this->tanggalakhir;
    }

    public function status()
    {
        return $this->status;
    }

}