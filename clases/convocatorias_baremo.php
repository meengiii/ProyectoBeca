<?php

class Convocatorias_Baremo
{
    private $idItemBarenables;
    private $idConvocatorias;
    private $maximoPuntos;
    private $requisito;
    private $minimo;
    private $presenta;

    // Constructor
    public function __construct($idItemBarenables, $idConvocatorias, $maximoPuntos, $requisito, $minimo, $presenta)
    {
        $this->idItemBarenables = $idItemBarenables;
        $this->idConvocatorias = $idConvocatorias;
        $this->maximoPuntos = $maximoPuntos;
        $this->requisito = $requisito;
        $this->minimo = $minimo;
        $this->presenta = $presenta;
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

    // Getter y Setter para maximoPuntos
    public function getMaximoPuntos()
    {
        return $this->maximoPuntos;
    }

    public function setMaximoPuntos($maximoPuntos)
    {
        $this->maximoPuntos = $maximoPuntos;
    }

    // Getter y Setter para requisito
    public function getRequisito()
    {
        return $this->requisito;
    }

    public function setRequisito($requisito)
    {
        $this->requisito = $requisito;
    }

    // Getter y Setter para minimo
    public function getMinimo()
    {
        return $this->minimo;
    }

    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;
    }

    // Getter y Setter para presenta
    public function getPresenta()
    {
        return $this->presenta;
    }

    public function setPresenta($presenta)
    {
        $this->presenta = $presenta;
    }
}

?>
