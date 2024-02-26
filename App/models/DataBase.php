<?php

namespace models;

use Exception;
use PDO;

class DataBase
{
    private $instance = null;
    public  function Connexion()
    {

        try {
            if ($this->instance === null) {
                $this->instance = new PDO(
                    'mysql:host=localhost;dbname=db_nsimtech;charset=utf8',
                    'root',
                    'enoch',
                    [
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8',
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    ]
                );
            }
            return $this->instance;
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), 1);
        }
    }
}
