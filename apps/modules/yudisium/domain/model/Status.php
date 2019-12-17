<?php

namespace Idy\Yudisium\Domain\Model;

// use Ramsey\Uuid\Uuid;

class Status
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

    public function equals(Status $status)
    {
        return $this->status() === $status->status;
    }

}