<?php
class Login
{
    private $conexion;

    function __construct($conexion)
    {
        $this->conexion = $conexion;
    }
    //funcion que inicia sesion del usuario
    public function user_login($usuario)
    {
        if ($usuario != null) 
        {
            // Inicio de sesión exitoso
            $user = new Candidatos($usuario["DNI"], $usuario["Apellidos"], $usuario["Nombre"], $usuario["telefono"], $usuario["correo"],
            $usuario["Domicilio"], $usuario["fecha_nacimiento"], $usuario["password"], $usuario["rol"]);
            Sesion::login_sesion($user);
            return true;
        } else {
            // Credenciales incorrectas
            return false;
        }
    }

    //funcion que cierra la sesion del usuario
    public function user_logout()
    {

    }
}
?>