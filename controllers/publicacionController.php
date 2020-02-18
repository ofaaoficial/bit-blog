<?php

/**
 * Class publicacionController
 */
class publicacionController extends Publicacion
{

    /**
     * publicacionController constructor.
     */
    public function __construct()
    {
        Seguridad::verificarUsuario();
    }

    /**
     * @return view
     */
    public function index()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/publicaciones/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * @return view
     */
    public function crear()
    {
        $categorias = Categoria::todo();
        require_once 'views/layouts/header.php';
        require_once 'views/publicaciones/crear.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * @return header
     */
    public function almacenar()
    {
        $_POST['creador_id'] = $_SESSION['usuario']->id;
        $_POST['fecha_creacion'] = date('Y-m-d h:m:s');
        echo parent::registrar_datos($_POST) ? header('location: ?controller=publicacion') : 'Error en el registro';
    }

    /**
     *
     */
    public function editar()
    {
        $publicacion = parent::buscar($_GET['id']);
        $categorias = Categoria::todo();
        require_once 'views/layouts/header.php';
        require_once 'views/publicaciones/editar.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     *
     */
    public function actualizar()
    {
        $_POST['id'] = $_GET['id'];
        if (parent::update_register($_POST)) {
            return header('location:?controller=publicaciones');
        } else {
            die('Error al actualizar');
        }
    }

    /**
     *
     */
    public function borrar()
    {
    }
}
