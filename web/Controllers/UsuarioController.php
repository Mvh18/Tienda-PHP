<?php

require_once 'Models/Usuario.php';

class UsuarioController
{
    public function index()
    {
        //echo 'Controlador usuarios, Acción index';
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

        header(('Location: ' . base_url));
    }

    public function login()
    {
        if (isset($_POST)) {
            //Identificar al usuario            
            //Consulta db
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity = $usuario->login();


            //var_dump($identity);

            //Crear una sesión

            if ($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;

                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                }
            } else {
                $_SESSION['error_login'] = 'Identificación fallida !!';
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        ob_start();
        header('Location: ' . base_url);
        ob_end_flush();
    }
}
