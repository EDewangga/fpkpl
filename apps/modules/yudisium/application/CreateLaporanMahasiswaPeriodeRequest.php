<?php

namespace Idy\Yudisium\Application;


class CreateLaporanMahasiswaPeriodeRequest
{
    private $wisuda;
    
    public function __construct($wisuda)
    {
        $this->wisuda = $wisuda;
    }
    public function wisuda()
    {
        return $this->wisuda;
    }
}