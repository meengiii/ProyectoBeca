<?php
function autocargador($class)
{
    $dirs = [
        $_SERVER["DOCUMENT_ROOT"] . '/api/',
        $_SERVER["DOCUMENT_ROOT"] . '/clases/',
        $_SERVER["DOCUMENT_ROOT"] . '/database/',
        $_SERVER["DOCUMENT_ROOT"] . '/helpers/',
        $_SERVER["DOCUMENT_ROOT"] . '/repositorios/',
        $_SERVER["DOCUMENT_ROOT"] . '/interfaces/vistas/'
    ];

    // Reemplaza los espacios de nombres con barras diagonales
    $class = str_replace('\\', '/', $class);

    foreach ($dirs as $dir) {
        $file = $dir . $class . '.php';

        // Si el archivo de clase existe, lo incluye y sale del bucle
        if (file_exists($file)) 
        {
            include $file;
            return;
        }
    }
}

spl_autoload_register('autocargador');

?>