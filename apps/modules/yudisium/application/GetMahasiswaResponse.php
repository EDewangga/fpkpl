<?php

namespace Idy\Yudisium\Application;

class GetMahasiswaResponse
{
    private $response;
    private $code;

    public function __construct($response, $code = 200)
    {
        $this->response = $response;
        $this->code = $code;
    }

    public function getResponse(){
      return $this->response;
    }

  	public function setResponse($response){
	  	$this->response = $response;
    }

    public function getCode()
    {
      return $this->code;
    }
}