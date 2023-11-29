<?php

class Destinatario_Convocatoria
{
    private $idDestinatarios;
    private $idConvocatorias;

    // Constructor
    public function __construct($idDestinatarios, $idConvocatorias)
    {
        $this->idDestinatarios = $idDestinatarios;
        $this->idConvocatorias = $idConvocatorias;
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

    // Getter y Setter para idConvocatorias
    public function getIdConvocatorias()
    {
        return $this->idConvocatorias;
    }

    public function setIdConvocatorias($idConvocatorias)
    {
        $this->idConvocatorias = $idConvocatorias;
    }
}

?>
