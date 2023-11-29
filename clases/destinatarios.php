<?php

class Destinatarios
{
    private $idDestinatarios;
    private $codGrupo;
    private $nombre;

    // Constructor
    public function __construct($idDestinatarios, $codGrupo, $nombre)
    {
        $this->idDestinatarios = $idDestinatarios;
        $this->codGrupo = $codGrupo;
        $this->nombre = $nombre;
    }

    // Getter y Setter para idDestinatarios
    public function getIdDestinatarios()
    {
        return $this->idDestinatarios;
    }

    public function setIdDestinatarios($idDestinatarios)
    {
        $this->idDestinatarios = $idDestinatarios;
    }

    // Getter y Setter para codGrupo
    public function getCodGrupo()
    {
        return $this->codGrupo;
    }

    public function setCodGrupo($codGrupo)
    {
        $this->codGrupo = $codGrupo;
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
