<?php

namespace Idy\Yudisium\Domain\Model;


class Wisuda
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

    public function equals(Wisuda $wisuda)
    {
        return $this->wisuda() === $wisuda->wisuda;
    }

}