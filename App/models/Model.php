<?php

namespace models;

use Exception;

class Model extends DataBase
{
    protected $table;
    private $query = null;
    private $resultat = null;

    public function findAll()
    {
        try {
            $this->query = $this->Connexion()->prepare("SELECT * FROM {$this->table}");
            $this->resultat = $this->query->execute();
            return $this->resultat = $this->query->fetchAll();
        } catch (Exception $exception) {
            $exception->getMessage();
        }
    }
}
