<?php

/**
 * Class Categoria
 */
class Categoria extends Database
{

    /**
     * @return array
     */
    public function todo()
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM categorias");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die("Error Categoria->all() " . $e->getMessage());
        }
    }

    /**
     * @param $data
     * @return bool
     */
    public function registrar_datos($data)
    {
        try {
            $result = parent::connect()->prepare("INSERT INTO categorias (nombre, descripcion) VALUES (?,?)");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['descripcion'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Error Categoria->register(data) " . $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function buscar($id)
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM categorias WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die("Error Categoria->find(id) " . $e->getMessage());
        }
    }

    /**
     * @param $data
     * @return bool
     */
    public function actualizar_registro($data)
    {
        try {
            $result = parent::connect()->prepare("UPDATE categorias SET nombre = ?, descripcion = ? WHERE id = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['descripcion'], PDO::PARAM_STR);
            $result->bindParam(10, $data['id'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Error Categoria->update_register(data) " . $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function borrar_registro($id)
    {
        try {
            $result = parent::connect()->prepare("DELETE FROM categorias WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("Error Categoria->delete_register(id) " . $e->getMessage());
        }
    }

}
