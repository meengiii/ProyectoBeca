<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://virtual.localfj.com/Interfaces/Estilos/login.css">
</head>

<body>
    <?php

    // Creamos validator
    $valida = new Validator();

    // Comprobamos que se ha hecho el post de formulario
    if (isset($_POST['login'])) 
    {
        $conn = DB::abreConexion();
        $login = new login($conn);

        // Validamos
        $valida->Requerido('dni'); 
        $valida->Requerido('password');   
    
        // Comprobamos validacion
        if ($valida->ValidacionPasada()) 
        {
            if (!empty($_POST['dni']) && !empty($_POST['password'])) 
            {
                $candidatoRepository = new candidatoRepository($conn);
                $user = $candidatoRepository->encuentra($_POST['dni'], $_POST['password']);
                if ($login->user_login($user)) 
                {
                    header("location: ?menu=crearConvocatoria"); 
                    exit(); 
                }
            }
        }
    }
    ?>

    <div class="contenedor">
        <form action="index.php" method="post">
            <h2>Consultorio Becas</h2>
            <div class="grupo-imput">
                <label for="username">DNI</label>
                <p><input type="text" id="username" name="dni" placeholder="DNI"></p>
                <span class="error"><?= $valida->ImprimirError('dni') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="password">Contraseña</label>
                <p><input type="password" name="password" placeholder="Contraseña" id="password"></p>
                <span class="error"><?= $valida->ImprimirError('password') ?></span>
            </div>
            <a class="olvido" href="index.php?menu=olvido">¿Olvidó su contraseña?</a>
            <div class="botones">
                <button class="registro" id="registro">
                    <p><a href="index.php?menu=registro" id="nuevoRegistro">No tienes cuenta? Registrarse</a></p>
                </button>
                <p><input type="submit" name="login" value="Iniciar Sesion" id="inicioSesion"></p>
            </div>

        </form>
    </div>




</body>

</html>