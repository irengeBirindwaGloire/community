<?php

namespace models\entities;

class Cours
{
    private $code;
    private $intituler;
    private $description;

    public function __construct($code, $intituler, $description)
    {
        $this->code = $code;
        $this->intituler = $intituler;
        $this->description = $description;
    }

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        return $this->code = $code;
    }

    public function getIntituler()
    {
        return $this->intituler;
    }
    public function setIntituler($intituler)
    {
        return $this->intituler = $intituler;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            } else {
                exit("this method $method dosn't exist");
            }
        }
    }
}
