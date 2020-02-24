<?php

/**
 * Class Comentario
 */
class Comentario extends Database
{
    /**
     * @param $id
     * @return mixed
     */
    public static function comentarios_publicacion($id)
    {
        try {
            $result = parent::connect()->prepare("SELECT c.contenido, CONCAT(u.nombres, ' ', u.apellidos) AS nombre_usuario FROM comentarios c INNER JOIN usuarios u ON u.id = c.usuario_id WHERE publicacion_id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die("Error Comentario->comentarios_publicacion() " . $e->getMessage());
        }
    }

    /**
     * @param $data
     * @return array
     */
    public static function registrar_comentario($data)
    {
        try {
            $result = parent::connect()->prepare("INSERT INTO comentarios (contenido, publicacion_id, usuario_id) VALUES (?,?,?)");
            $result->bindParam(1, $data['contenido'], PDO::PARAM_STR);
            $result->bindParam(2, $data['publicacion_id'], PDO::PARAM_INT);
            $result->bindParam(3, $data['usuario_id'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("Error Comentario->registrar_comentario() " . $e->getMessage());
        }
    }
}
