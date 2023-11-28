<?php
class Validator
{
    //Array de errores
    private $errores;

    //Constructor
    public function __construct()
    {
        $this->errores = array();
    }
    public function Requerido($campo)
    {
        if (!isset($_POST[$campo]) || empty($_POST[$campo])) {
            $this->errores[$campo] = "El campo $campo no puede estar vacio";
            return false;
        }
        return true;
    }
    //cuenta los errores del array
    public function ValidacionPasada()
    {
        if (count($this->errores) != 0) {
            return false;
        }
        return true;
    }
    //imprime los errores segun el campo
    public function ImprimirError($campo)
    {
        return
            isset($this->errores[$campo]) ? '<span class="error_mensaje">' . $this->errores[$campo] . '</span>' : '';
    }

}
?>