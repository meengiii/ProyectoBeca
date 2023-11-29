<?php

class Convocatorias
{
    private $idConvocatorias;
    private $movilidades;
    private $tipo;
    private $fechaIni;
    private $fechaFin;
    private $fechaIniBaremacion;
    private $fechaFinBaremacion;
    private $fechaLisProvisional;
    private $fechaLisDefinitiva;
    private $proyectosCodProyecto;
    private $candidatosIdCandidato;

    // Constructor
    public function __construct($idConvocatorias, $movilidades, $tipo, $fechaIni, $fechaFin, $fechaIniBaremacion, $fechaFinBaremacion, $fechaLisProvisional, $fechaLisDefinitiva, $proyectosCodProyecto, $candidatosIdCandidato)
    {
        $this->idConvocatorias = $idConvocatorias;
        $this->movilidades = $movilidades;
        $this->tipo = $tipo;
        $this->fechaIni = $fechaIni;
        $this->fechaFin = $fechaFin;
        $this->fechaIniBaremacion = $fechaIniBaremacion;
        $this->fechaFinBaremacion = $fechaFinBaremacion;
        $this->fechaLisProvisional = $fechaLisProvisional;
        $this->fechaLisDefinitiva = $fechaLisDefinitiva;
        $this->proyectosCodProyecto = $proyectosCodProyecto;
        $this->candidatosIdCandidato = $candidatosIdCandidato;
    }

    // Getter y Setter para idConvocatorias
    public function getIdConvocatorias()
    {
        return $this->idConvocatorias;
    }

    public function setIdConvocatorias($idConvocatorias)
    {
        $this->idConvocatorias = $idConvocatorias;
    }

    // Getter y Setter para movilidades
    public function getMovilidades()
    {
        return $this->movilidades;
    }

    public function setMovilidades($movilidades)
    {
        $this->movilidades = $movilidades;
    }

    // Getter y Setter para tipo
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    // Getter y Setter para fechaIni
    public function getFechaIni()
    {
        return $this->fechaIni;
    }

    public function setFechaIni($fechaIni)
    {
        $this->fechaIni = $fechaIni;
    }

    // Getter y Setter para fechaFin
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }

    // Getter y Setter para fechaIniBaremacion
    public function getFechaIniBaremacion()
    {
        return $this->fechaIniBaremacion;
    }

    public function setFechaIniBaremacion($fechaIniBaremacion)
    {
        $this->fechaIniBaremacion = $fechaIniBaremacion;
    }

    // Getter y Setter para fechaFinBaremacion
    public function getFechaFinBaremacion()
    {
        return $this->fechaFinBaremacion;
    }

    public function setFechaFinBaremacion($fechaFinBaremacion)
    {
        $this->fechaFinBaremacion = $fechaFinBaremacion;
    }

    // Getter y Setter para fechaLisProvisional
    public function getFechaLisProvisional()
    {
        return $this->fechaLisProvisional;
    }

    public function setFechaLisProvisional($fechaLisProvisional)
    {
        $this->fechaLisProvisional = $fechaLisProvisional;
    }

    // Getter y Setter para fechaLisDefinitiva
    public function getFechaLisDefinitiva()
    {
        return $this->fechaLisDefinitiva;
    }

    public function setFechaLisDefinitiva($fechaLisDefinitiva)
    {
        $this->fechaLisDefinitiva = $fechaLisDefinitiva;
    }

    // Getter y Setter para proyectosCodProyecto
    public function getProyectosCodProyecto()
    {
        return $this->proyectosCodProyecto;
    }

    public function setProyectosCodProyecto($proyectosCodProyecto)
    {
        $this->proyectosCodProyecto = $proyectosCodProyecto;
    }

    // Getter y Setter para candidatosIdCandidato
    public function getCandidatosIdCandidato()
    {
        return $this->candidatosIdCandidato;
    }

    public function setCandidatosIdCandidato($candidatosIdCandidato)
    {
        $this->candidatosIdCandidato = $candidatosIdCandidato;
    }
}

?>
