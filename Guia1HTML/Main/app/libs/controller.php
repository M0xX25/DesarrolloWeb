<?php

class Controller
{
    public function model($modelo)
    {
        //trae los modelos y los retorna
        require_once '../app/models/' . $modelo . '.php';

        return new $modelo;
    }

    public function view($view, $datos = [])
    {
        if (file_exists('../app/views/' . $view . '.php'))
        {
            require_once '../app/views/' . $view . '.php';

        } else {
            echo 'La view no existe';
        }
    }
}