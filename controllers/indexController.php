<?php

/**
 * Class indexController
 */
class indexController
{

    /**
     * @return view
     */
    public function index()
    {
        $publicaciones = Publicacion::todo('index');
        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * @return view
     */
    public function ingresar()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/index/ingresar.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * @return view
     */
    public function registro()
    {
        require_once 'views/layouts/header.php';
        require_once 'views/index/registro.php';
        require_once 'views/layouts/footer.php';
    }

}
