<?php

namespace Idy\Yudisium\Domain\Model;

class Mahasiswa
{
    private $user;
    private $gender;
    private $ttl;
    
    public function __construct($user, $gender, $ttl)
    {
        $this->user = $user;
        $this->gender = $gender;
        $this->ttl = $ttl;
    }

    public function user()
    {
        return $this->user;
    }

    public function gender()
    {
        return $this->gender;
    }

    public function ttl()
    {
        return $this->ttl;
    }

}