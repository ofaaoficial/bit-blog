<?php

/**
 * Class Database
 */
class Database
{

    /**
     * @return PDO
     */
    public function connect()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=bit-blog;charset=utf8;',
                'root',
                '',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
        } catch (Exception $e) {
            die("Database->connect() ". $e->getMessage());
        }
    }

}



