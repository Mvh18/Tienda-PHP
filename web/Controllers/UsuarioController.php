<?php

require_once 'Models/Usuario.php';

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
        if (isset($_POST)) {
            $usuario = new Usuario();

            $usuario->setNombre($_POST['nombre']);
            $usuario->setEmail($_POST['email']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setPassword($_POST['password']);

            $save = $usuario->save();

            if ($save) {
                $_SESSION['register'] = "complete";
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }

        header("Location:" . base_url . 'Usuario/register');
    }
}
