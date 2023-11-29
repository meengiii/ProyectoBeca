<?php

class Baremacion
{
    private $idBaremacion;
    private $idItemBarenables;
    private $idConvocatorias;
    private $url;
    private $candidatosIdCandidato;

    // Constructor
    public function __construct($idBaremacion, $idItemBarenables, $idConvocatorias, $url, $candidatosIdCandidato)
    {
        $this->idBaremacion = $idBaremacion;
        $this->idItemBarenables = $idItemBarenables;
        $this->idConvocatorias = $idConvocatorias;
        $this->url = $url;
        $this->candidatosIdCandidato = $candidatosIdCandidato;
    }

    // Getter y Setter para idBaremacion
    public function getIdBaremacion()
    {
        return $this->idBaremacion;
    }

    public function setIdBaremacion($idBaremacion)
    {
        $this->idBaremacion = $idBaremacion;
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

    // Getter y Setter para idConvocatorias
    public function getIdConvocatorias()
    {
        return $this->idConvocatorias;
    }

    public function setIdConvocatorias($idConvocatorias)
    {
        $this->idConvocatorias = $idConvocatorias;
    }

    // Getter y Setter para url
    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
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
