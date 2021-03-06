<?php

class usuarioController extends Usuario
{

    public function __construct()
    {
        Seguridad::verificarUsuario();
    }

    public function index()
    {
        Seguridad::verificarRol(1);
        require_once 'views/layouts/header.php';
        require_once 'views/usuarios/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function crear()
    {
        Seguridad::verificarRol(1);
        $roles = Rol::todo();
        require_once 'views/layouts/header.php';
        require_once 'views/usuarios/crear.php';
        require_once 'views/layouts/footer.php';
    }

    public function almacenar()
    {
        if (!isset($_POST['rol_id'])) $_POST['rol_id'] = 2;
        $_POST['contrasenia'] = password_hash($_POST['contrasenia'], PASSWORD_DEFAULT);
        echo parent::registrar_datos($_POST) ? header('location: ?controller=usuario') : 'Error en el registro';
    }

    public function editar()
    {
        Seguridad::verificarRol(1);
        $roles = Rol::todo();
        $usuario = parent::buscar($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/usuarios/editar.php';
        require_once 'views/layouts/footer.php';
    }

    public function actualizar()
    {
        Seguridad::verificarRol(1);
        $_POST['id'] = $_GET['id'];
        $_POST['contrasenia'] = password_hash($_POST['contrasenia'], PASSWORD_DEFAULT);
        if (parent::actualizar_registro($_POST)) {
            return header('location:?controller=usuario');
        } else {
            die('Error al actualizar');
        }
    }

    public function borrar()
    {
        Seguridad::verificarRol(1);
        if (parent::borrar_registro($_GET['id'])) {
            return header('location:?controller=usuario');
        } else {
            die('Error al borrar');
        }
    }
}
