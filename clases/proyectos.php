<?php

class Proyectos
{
    private $codProyecto;
    private $nombre;
    private $fechaIni;
    private $fechaFin;

    // Constructor
    public function __construct($codProyecto, $nombre, $fechaIni, $fechaFin)
    {
        $this->codProyecto = $codProyecto;
        $this->nombre = $nombre;
        $this->fechaIni = $fechaIni;
        $this->fechaFin = $fechaFin;
    }

    // Getter y Setter para CodProyecto
    public function getCodProyecto()
    {
        return $this->codProyecto;
    }

    public function setCodProyecto($codProyecto)
    {
        $this->codProyecto = $codProyecto;
    }

    // Getter y Setter para Nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Getter y Setter para FechaIni
    public function getFechaIni()
    {
        return $this->fechaIni;
    }

    public function setFechaIni($fechaIni)
    {
        $this->fechaIni = $fechaIni;
    }

    // Getter y Setter para FechaFin
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }
}

?>
