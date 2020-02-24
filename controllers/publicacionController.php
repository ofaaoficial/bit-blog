<?php

/**
 * Class publicacionController
 */
class publicacionController extends Publicacion
{

    /**
     * @return view
     */
    public function index()
    {
        Seguridad::verificarUsuario();
        require_once 'views/layouts/header.php';
        require_once 'views/publicaciones/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * @return view
     */
    public function crear()
    {
        Seguridad::verificarUsuario();
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
        Seguridad::verificarUsuario();
        $_POST['creador_id'] = $_SESSION['usuario']->id;
        $_POST['fecha_creacion'] = date('Y-m-d h:m:s');
        echo parent::registrar_datos($_POST) ? header('location: ?controller=publicacion') : 'Error en el registro';
    }

    /**
     * @return view
     */
    public function editar()
    {
        Seguridad::verificarUsuario();
        $publicacion = parent::buscar($_GET['id']);
        $categorias = Categoria::todo();
        require_once 'views/layouts/header.php';
        require_once 'views/publicaciones/editar.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * @return header
     */
    public function actualizar()
    {
        Seguridad::verificarUsuario();
        $_POST['id'] = $_GET['id'];
        $_POST['fecha_edicion'] = date('Y-m-d h:m:s');
        if (parent::actualizar_registro($_POST)) {
            return header('location:?controller=publicacion');
        } else {
            die('Error al actualizar');
        }
    }

    /**
     * @return show
     */
    public function ver()
    {
        $publicacion = parent::buscar($_GET['id']);
        $comentarios = Comentario::comentarios_publicacion($_GET['id']);

        require_once 'views/layouts/header.php';
        require_once 'views/publicaciones/ver.php';
        require_once 'views/layouts/footer.php';
    }

    public function comentar()
    {
        $data['contenido'] = $_POST['contenido'];
        $data['usuario_id'] = $_SESSION['usuario']->id;
        $data['publicacion_id'] = $_GET['id'];
        Comentario::registrar_comentario($data);
        return header('location: ?controller=publicacion&method=ver&id=' . $_GET['id']);
    }

    /**
     * @return header
     */
    public function borrar()
    {
        Seguridad::verificarUsuario();
        Seguridad::verificarRol(1);
        if (parent::borrar_registro($_GET['id'])) {
            return header('location:?controller=usuario');
        } else {
            die('Error al borrar');
        }
    }
}
