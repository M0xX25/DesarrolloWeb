<?php

class home extends Controller
{
    private $privilegios;

    public function __construct()
    {
        
    }

    public function index() 
    {
        $this->view ('pages/index');
    }
}

class votacion extends Controller
{
    private $privilegios;

    public function __construct()
    {
        
    }

    public function votacion() 
    {
        $this->view ('pages/index');
    }
}

?>