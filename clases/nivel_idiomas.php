<?php
class NivelIdiomas {
    // Propiedades de la clase
    private $nivel;

    // Constructor
    public function __construct($nivel) {
        $this->nivel = $nivel;
    }

    // Métodos para establecer y obtener valores
    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function getNivel() {
        return $this->nivel;
    }
}
?>