<?php

class Item_Barenables
{
    private $idItemBarenables;
    private $nombre;

    // Constructor
    public function __construct($idItemBarenables, $nombre)
    {
        $this->idItemBarenables = $idItemBarenables;
        $this->nombre = $nombre;
    }

    // Getter y Setter para idItemBarenables
    public function getIdItemBarenables()
    {
        return $this->idItemBarenables;
    }

    public function setIdItemBarenables($idItemBarenables)
    {
        $this->idItemBarenables = $idItemBarenables;
    }

    // Getter y Setter para nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}

?>
