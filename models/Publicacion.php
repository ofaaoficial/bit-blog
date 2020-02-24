<?php

/**
 * Class Publicacion
 */
class Publicacion extends Database
{

    /**
     * @return array
     */
    public function todo($index = false)
    {
        try {
            if ((isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) && !$index) {
                $result = parent::connect()->prepare($_SESSION['usuario']->rol_id != 1 ? "SELECT p.id, p.titulo, p.fecha_creacion, CONCAT(u.nombres, ' ' ,u.apellidos) AS creador FROM publicaciones p INNER JOIN usuarios u ON p.creador_id = u.id WHERE creador_id = ?" : "SELECT p.id, p.titulo, p.fecha_creacion, CONCAT(u.nombres, ' ' ,u.apellidos) AS creador FROM publicaciones p INNER JOIN usuarios u ON p.creador_id = u.id");
                if ($_SESSION['usuario']->rol_id != 1) $result->bindParam(1, $_SESSION['usuario']->id, PDO::PARAM_INT);
                $result->execute();
                return $result->fetchAll();
            } else {
                $result = parent::connect()->prepare("SELECT p.id, p.titulo, p.fecha_creacion, p.contenido, c.nombre AS nombre_categoria, CONCAT(u.nombres, ' ' ,u.apellidos) AS creador FROM publicaciones p INNER JOIN usuarios u ON p.creador_id = u.id INNER JOIN categorias c ON c.id = p.categoria_id");
                $result->execute();
                return $result->fetchAll();
            }

        } catch (Exception $e) {
            die("Error Publicacion->all() " . $e->getMessage());
        }
    }

    /**
     * @param $data
     * @return bool
     */
    public function registrar_datos($data)
    {
        try {
            $result = parent::connect()->prepare("INSERT INTO publicaciones (titulo, contenido, fecha_creacion, fecha_edicion, categoria_id, creador_id) VALUES (?,?,?,?,?,?)");
            $result->bindParam(1, $data['titulo'], PDO::PARAM_STR);
            $result->bindParam(2, $data['contenido'], PDO::PARAM_STR);
            $result->bindParam(3, $data['fecha_creacion'], PDO::PARAM_STR);
            $result->bindParam(4, $data['fecha_edicion'], PDO::PARAM_STR);
            $result->bindParam(5, $data['categoria_id'], PDO::PARAM_STR);
            $result->bindParam(6, $data['creador_id'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Error Publicacion->register(data) " . $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function buscar($id)
    {
        try {
            $result = parent::connect()->prepare("SELECT p.id, p.titulo, p.fecha_creacion, p.contenido, c.nombre AS nombre_categoria, p.categoria_id,CONCAT(u.nombres, ' ' ,u.apellidos) AS creador FROM publicaciones p INNER JOIN usuarios u ON p.creador_id = u.id INNER JOIN categorias c ON c.id = p.categoria_id WHERE p.id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die("Error Publicacion->find(id) " . $e->getMessage());
        }
    }

    /**
     * @param $data
     * @return bool
     */
    public function actualizar_registro($data)
    {
        try {
            $result = parent::connect()->prepare("UPDATE publicaciones SET titulo = ?, contenido = ?, fecha_edicion = ?, categoria_id = ? WHERE id = ?");
            $result->bindParam(1, $data['titulo'], PDO::PARAM_STR);
            $result->bindParam(2, $data['contenido'], PDO::PARAM_STR);
            $result->bindParam(3, $data['fecha_edicion'], PDO::PARAM_STR);
            $result->bindParam(4, $data['categoria_id'], PDO::PARAM_STR);
            $result->bindParam(5, $data['id'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Error Publicacion->update_register(data) " . $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function borrar_registro($id)
    {
        try {
            $result = parent::connect()->prepare("DELETE FROM publicaciones WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die("Error Publicacion->delete_register(id) " . $e->getMessage());
        }
    }

}
