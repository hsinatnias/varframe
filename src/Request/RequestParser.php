<?php

namespace Varsha\Varframe\Request;

class RequestParser
{
    protected $request_uri ;
    protected $request_method ;
    
    public function __construct()
    {
        $this->request_uri = $_SERVER['REQUEST_URI'];
        $this->request_method = $_SERVER['REQUEST_METHOD'];
    }
   

    public function getUrlAndMethod()
    {
        $requestData['request_uri']= $this->request_uri;
        $requestData['request_method']= $this->request_method;
        return $requestData;
    }

}
