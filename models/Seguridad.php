<?php

/**
 * Class Seguridad
 */
class Seguridad extends Database
{

    /**
     * @param $email
     * @return mixed
     */
    public function validarIngreso($email)
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE correo = ?");
            $result->bindParam(1, $email, PDO::PARAM_STR);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die("Seguridad->validarIngreso(email) " . $e->getMessage());
        }
    }

    /**
     * @return header
     */
    public static function verificarUsuario()
    {
        if (!isset($_SESSION['usuario'])) header('location:?method=ingresar');
    }

    /**
     * @param $role
     */
    public function verificarRol($rol)
    {
        if ($rol != $_SESSION['usuario']->rol_id) {
            return die('No tiene los permisos necesarios.');
        }
    }

}
