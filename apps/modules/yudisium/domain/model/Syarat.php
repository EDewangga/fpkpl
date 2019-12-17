<?php

namespace Idy\Yudisium\Domain\Model;

class Syarat
{
    private $ID;
    private $namasyarat;
    private $nilai;
    
    public function __construct($ID, $namasyarat, $nilai)
    {
        $this->ID = $ID;
        $this->namasyarat = $namasyarat;
        $this->nilai = $nilai;
    }

    public function ID()
    {
        return $this->ID;
    }

    public function namasyarat()
    {
        return $this->namasyarat;
    }

    public function nilai()
    {
        return $this->nilai;
    }

}