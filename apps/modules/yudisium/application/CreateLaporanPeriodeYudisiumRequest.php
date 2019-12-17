<?php

namespace Idy\Yudisium\Application;


class CreateLaporanPeriodeYudisiumRequest
{
    private $status;
    
    public function __construct($status)
    {
        $this->status = $status;
    }
    public function status()
    {
        return $this->status;
    }
}