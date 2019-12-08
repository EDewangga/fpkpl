<?php

namespace Idy\Yudisium\Domain\Model;

// use Ramsey\Uuid\Uuid;

class status
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

    public function equals(status $status)
    {
        return $this->status() === $status->status;
    }

}