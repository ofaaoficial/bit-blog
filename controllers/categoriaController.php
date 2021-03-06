<?php

/**
 * Class categoriaController
 */
class categoriaController extends Categoria
{

    /**
     * categoriaController constructor.
     */
    public function __construct()
    {
        Seguridad::verificarUsuario();
        Seguridad::verificarRol(1);
    }

    /**
     * @return view
     */
    public function index()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/categorias/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * @return view
     */
    public function crear()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/categorias/crear.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     *
     */
    public function almacenar()
    {
        echo parent::registrar_datos($_POST) ? header('location: ?controller=categoria') : 'Error en el registro';
    }

    /**
     * @return view
     */
    public function editar()
    {
        $categoria = parent::buscar($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/categorias/editar.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * @return header
     */
    public function actualizar()
    {
        $_POST['id'] = $_GET['id'];
        if (parent::actualizar_registro($_POST)) {
            return header('location:?controller=categoria');
        } else {
            die('Error al actualizar');
        }
    }

    /**
     * @return header
     */
    public function borrar()
    {
        if (parent::borrar_registro($_GET['id'])) {
            return header('location:?controller=categoria');
        } else {
            die('Error al borrar');
        }
    }
}
