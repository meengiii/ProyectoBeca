<?php
class Principal
{
    public static function main()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . '/helpers/autocargador.php'; 
        require_once $_SERVER["DOCUMENT_ROOT"] . '/interfaces/vistas/enruta.php'; 
    }
}
Principal::main();
?>