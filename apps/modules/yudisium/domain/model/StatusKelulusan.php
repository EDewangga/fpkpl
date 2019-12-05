<?php

namespace Idy\Yudisium\Domain\Model;

class StatusKelulusan
{
    private $status;
    
    public function __construct($status)
    {
        $this->keterangan = $status;
    }

}