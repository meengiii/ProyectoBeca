<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://virtual.localfj.com/interfaces/estilos/registro.css">
    <title>Registro de Usuario</title>
</head>

<body>
<?php
    $valida = new Validator();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registro'])) 
    {
        $conn = DB::abreConexion();

        $valida->Requerido('nombre');
        $valida->Requerido('password');
        $valida->Requerido('dni');
        $valida->Requerido('apellidos');
        $valida->Requerido('telefono');
        $valida->Requerido('correo');
        $valida->Requerido('domicilio');
        $valida->Requerido('fecha_de_Nacimiento');

        if ($valida->ValidacionPasada()) {
            if (!empty($_POST['nombre']) && !empty($_POST['curso']) && !empty($_POST['password']) 
            && !empty($_POST['dni']) && !empty($_POST['apellidos']) && !empty($_POST['telefono']) 
            && !empty($_POST['correo']) && !empty($_POST['domicilio']) && !empty($_POST['fecha_de_Nacimiento'])) 
            {

                // Convertir la fecha de nacimiento al formato adecuado
                $fechaNacimiento = date('Y-m-d', strtotime($_POST['fecha_de_Nacimiento']));

                // Validar si el campo de rol está vacío y establecerlo como "alumno"
                $rol = !empty($_POST['rol']) ? $_POST['rol'] : "alumno";
                $idCandidato = null;
                $candidato = new Candidatos
                (
                    $idCandidato,$_POST['dni'],$_POST['apellidos'],$_POST['nombre'],$_POST['curso'],$_POST['telefono'],
                    $_POST['correo'],$_POST['domicilio'],$fechaNacimiento,$_POST['password'],$rol
                );

                // Insertar los datos en la base de datos
                $repositorio = new CandidatoRepository($conn);
                $repositorio->crearCandidato($candidato);
                echo '<p class="mensaje-confirmacion">Registro exitoso. ¡Bienvenido!</p>'; 
                header('location:?menu=login');
            }
        }
    }
    ?>

    <div class="contenedor">
        <form enctype="multipart/form-data" method="post">
            <h2>Registro</h2>
            <div class="grupo-imput">
                <label for="dni">DNI</label>
                <p><input type="text" name="dni" placeholder="DNI"></p>
                <span class="error"><?= $valida->ImprimirError('dni') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="apellidos">Apellidos</label>
                <p><input type="text" name="apellidos" placeholder="Apellidos"></p>
                <span class="error"><?= $valida->ImprimirError('apellidos') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="nombre">Nombre</label>
                <p><input type="text" name="nombre" placeholder="Nombre"></p>
                <span class="error"><?= $valida->ImprimirError('nombre') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="curso">Curso</label>
                <p><input type="text" name="curso" placeholder="Curso"></p>
                <span class="error"><?= $valida->ImprimirError('curso') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="telefono">Teléfono</label>
                <p><input type="text" name="telefono" placeholder="Teléfono"></p>
                <span class="error"><?= $valida->ImprimirError('telefono') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="correo">Correo</label>
                <p><input type="text" name="correo" placeholder="Correo"></p>
                <span class="error"><?= $valida->ImprimirError('correo') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="domicilio">Domicilio</label>
                <p><input type="text" name="domicilio" placeholder="Domicilio"></p>
                <span class="error"><?= $valida->ImprimirError('domicilio') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <p><input type="date" name="fecha_de_Nacimiento"></p>
                <span class="error"><?= $valida->ImprimirError('fecha_de_Nacimiento') ?></span>
            </div>
            <div class="grupo-imput">
                <label for="password">Contraseña</label>
                <p><input type="password" name="password" placeholder="Contraseña"></p>
                <span class="error"><?= $valida->ImprimirError('password') ?></span>
            </div>
            <div class="botones">
                <p id="regis"><input type="submit" name="registro" value="Registrarse" class="registro"></p>
            </div>
            <p><a href="index.php?menu=login">¿Ya tienes cuenta?</a></p>
        </form>
    </div>

</body>

</html>