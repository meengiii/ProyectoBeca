<?php

class Nivel_Idiomas
{
    private $nivel;

    // Constructor
    public function __construct($nivel)
    {
        $this->nivel = $nivel;
    }

    // Getter y Setter para nivel
    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }
}

?>
