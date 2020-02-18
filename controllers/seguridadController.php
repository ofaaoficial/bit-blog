<?php

class seguridadController extends Seguridad
{

    public function ingresar()
    {
        $usuario = parent::validarIngreso($_POST['correo']);

        if (!is_object($usuario)) {
            return header('location:?method=ingresar');
        }

        if (password_verify($_POST['contrasenia'], $usuario->contrasenia)) {
            $_SESSION['usuario'] = $usuario;
            return header('location:?controller=publicacion');
        }

        return header('location:?method=ingresar');
    }

    public function salir()
    {
        unset($_SESSION['usuarios']);
        session_destroy();
        return header('location:?controller=index');
    }

}
