<?php

class UsuarioController
{
    public function index()
    {
        echo 'Controlador usuarios, Acción index';
    }

    public function register()
    {
        require_once 'Views/Usuario/registro.php';
    }

    public function save()
    {
        if (null !== $_POST) {
            var_dump($_POST);
        }
    }
}
