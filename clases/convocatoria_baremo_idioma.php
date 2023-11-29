<?php

class Convocatoria_Baremo_Idioma
{
    private $convocatoriaBaremoIdItemBarenables;
    private $convocatoriaBaremoIdConvocatorias;
    private $nivelIdiomasNivel;
    private $puntos;

    // Constructor
    public function __construct($convocatoriaBaremoIdItemBarenables, $convocatoriaBaremoIdConvocatorias, $nivelIdiomasNivel, $puntos)
    {
        $this->convocatoriaBaremoIdItemBarenables = $convocatoriaBaremoIdItemBarenables;
        $this->convocatoriaBaremoIdConvocatorias = $convocatoriaBaremoIdConvocatorias;
        $this->nivelIdiomasNivel = $nivelIdiomasNivel;
        $this->puntos = $puntos;
    }

    // Getter y Setter para convocatoriaBaremoIdItemBarenables
    public function getConvocatoriaBaremoIdItemBarenables()
    {
        return $this->convocatoriaBaremoIdItemBarenables;
    }

    public function setConvocatoriaBaremoIdItemBarenables($convocatoriaBaremoIdItemBarenables)
    {
        $this->convocatoriaBaremoIdItemBarenables = $convocatoriaBaremoIdItemBarenables;
    }

    // Getter y Setter para convocatoriaBaremoIdConvocatorias
    public function getConvocatoriaBaremoIdConvocatorias()
    {
        return $this->convocatoriaBaremoIdConvocatorias;
    }

    public function setConvocatoriaBaremoIdConvocatorias($convocatoriaBaremoIdConvocatorias)
    {
        $this->convocatoriaBaremoIdConvocatorias = $convocatoriaBaremoIdConvocatorias;
    }

    // Getter y Setter para nivelIdiomasNivel
    public function getNivelIdiomasNivel()
    {
        return $this->nivelIdiomasNivel;
    }

    public function setNivelIdiomasNivel($nivelIdiomasNivel)
    {
        $this->nivelIdiomasNivel = $nivelIdiomasNivel;
    }

    // Getter y Setter para puntos
    public function getPuntos()
    {
        return $this->puntos;
    }

    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;
    }
}

?>
