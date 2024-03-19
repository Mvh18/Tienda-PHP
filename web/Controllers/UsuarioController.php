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
        ob_start();
        
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

        ob_end_clean();

        // Registra una función de devolución de llamada para manejar las cabeceras antes de enviarlas
        header_register_callback(function () {
            // Redirige después de completar la lógica de registro
            header('Location: ' . base_url . 'Usuario/register');
            exit(); // Asegúrate de salir después de la redirección
        });
    }
}
