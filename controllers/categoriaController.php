<?php

class categoriaController extends Categoria
{

    public function __construct()
    {
        Seguridad::verificarUsuario();
    }

    public function index()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/categorias/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function crear()
    {
        $roles = Rol::todo();
        require_once 'views/layouts/header.php';
        require_once 'views/categorias/crear.php';
        require_once 'views/layouts/footer.php';
    }

    public function almacenar()
    {
        echo parent::registrar_datos($_POST) ? header('location: ?controller=categoria') : 'Error en el registro';
    }

    public function editar()
    {
        $categoria = parent::buscar($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/categorias/editar.php';
        require_once 'views/layouts/footer.php';
    }

    public function actualizar()
    {
        $_POST['id'] = $_GET['id'];
        if (parent::actualizar_registro($_POST)) {
            return header('location:?controller=categoria');
        } else {
            die('Error al actualizar');
        }
    }

    public function borrar()
    {
        if (parent::borrar_registro($_GET['id'])) {
            return header('location:?controller=categoria');
        } else {
            die('Error al borrar');
        }
    }
}
