<?php

/**
 * Class Publicacion
 */
class Publicacion extends Database
{

    /**
     * @return array
     */
    public function todo()
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM publicaciones");
            $result->execute();
            return $result->fetchAll();
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
            $result = parent::connect()->prepare("INSERT INTO usuarios (correo, contrasenia, nombres, apellidos, direccion, celular, sitio_web, profesion, rol_id) VALUES (?,?,?,?,?,?,?,?,?)");
            $result->bindParam(1, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(2, $data['contrasenia'], PDO::PARAM_STR);
            $result->bindParam(3, $data['nombres'], PDO::PARAM_STR);
            $result->bindParam(4, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(5, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(6, $data['celular'], PDO::PARAM_STR);
            $result->bindParam(7, $data['sitio_web'], PDO::PARAM_STR);
            $result->bindParam(8, $data['profesion'], PDO::PARAM_STR);
            $result->bindParam(9, $data['rol_id'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Error Publicacion->register(data) " . $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function buscar($id)
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE id = ?");
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
            $result = parent::connect()->prepare("UPDATE usuarios SET correo = ?, contrasenia = ?, nombres = ?, apellidos = ?, direccion = ?, celular = ?, sitio_web = ?, profesion = ?, rol_id  = ? WHERE id = ?");
            $result->bindParam(1, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(2, $data['contrasenia'], PDO::PARAM_STR);
            $result->bindParam(3, $data['nombres'], PDO::PARAM_STR);
            $result->bindParam(4, $data['apellidos'], PDO::PARAM_STR);
            $result->bindParam(5, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(6, $data['celular'], PDO::PARAM_STR);
            $result->bindParam(7, $data['sitio_web'], PDO::PARAM_STR);
            $result->bindParam(8, $data['profesion'], PDO::PARAM_STR);
            $result->bindParam(9, $data['rol_id'], PDO::PARAM_STR);
            $result->bindParam(10, $data['id'], PDO::PARAM_STR);
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
            $result = parent::connect()->prepare("DELETE FROM usuarios WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die("Error Publicacion->delete_register(id) " . $e->getMessage());
        }
    }

}