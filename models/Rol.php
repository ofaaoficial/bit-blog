<?php

/**
 * Class Rol
 */
class Rol extends Database
{

    /**
     * @return array
     */
    public static function todo()
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM roles");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die("Error Rol->all() " . $e->getMessage());
        }
    }

}
