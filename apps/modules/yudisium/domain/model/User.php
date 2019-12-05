<?php

namespace Idy\Yudisium\Domain\Model;

class User
{
    private $id;
    private $name;
    private $role;
    
    public function __construct($id, $name, $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->role = $role;
    }

    public function id()
    {
        return $this->id;
    }

    public function name()
    {
        return $this->name;
    }

    public function role()
    {
        return $this->role;
    }

}