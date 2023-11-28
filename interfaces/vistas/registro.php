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
        // Asegúrate de incluir las clases y métodos necesarios, como db::abreConexion(), UserRepository y createUser.
        
        if (isset($_POST['registro'])) {
            $conn = db::abreConexion();
            $candidatoRepository = new CandidatoRepository($conn);

            // Verifica que los campos necesarios estén presentes y no estén vacíos
            if (!empty($_POST['dni']) && !empty($_POST['password']) && !empty($_POST['apellidos']) && !empty($_POST['nombre']) && !empty($_POST['curso'])
            && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['domicilio']) && !empty($_POST['fecha_Nacimiento'])) 
            {
                // Crea un nuevo candidato y realiza la inserción en la base de datos
                $newCandidato = new Candidatos(
                    $_POST['dni'],
                    $_POST['apellidos'],
                    $_POST['nombre'],
                    $_POST['curso'],
                    $_POST['telefono'],
                    $_POST['correo'],
                    $_POST['domicilio'],
                    $_POST['fechaNacimiento'],
                    $_POST['password'],
                    $_POST['rol']
                );

                $candidatoRepository->crearCandidato(
                    $newCandidato->getDni(),
                    $newCandidato->getApellidos(),
                    $newCandidato->getNombre(),
                    $newCandidato->getCurso(),
                    $newCandidato->getTelefono(),
                    $newCandidato->getCorreo(),
                    $newCandidato->getDomicilio(),
                    $newCandidato->getFechaNacimiento(),
                    $newCandidato->getPassword(),
                    $newCandidato->getRol()
                );
            }
        }
    ?>

    <div class="contenedor">
        <form enctype="multipart/form-data" method="post">
            <h2>Registro</h2>
            <div class="grupo-imput">
                <label for="dni">DNI</label>
                <p><input type="text" name="newUser" placeholder="DNI"></p>
                <?= $valida->ImprimirError('dni') ?>
            </div>
            <div class="grupo-imput">
                <label for="apellidos">Apellidos</label>
                <p><input type="text" name="apellidos" placeholder="Apellidos"></p>
                <?= $valida->ImprimirError('apellidos') ?>
            </div>
            <div class="grupo-imput">
                <label for="nombre">Nombre</label>
                <p><input type="text" name="nombre" placeholder="Nombre"></p>
                <?= $valida->ImprimirError('nombre') ?>
            </div>
            <div class="grupo-imput">
                <label for="curso">Curso</label>
                <p><input type="text" name="curso" placeholder="Curso"></p>
                <?= $valida->ImprimirError('curso') ?>
            </div>
            <div class="grupo-imput">
                <label for="telefono">Teléfono</label>
                <p><input type="text" name="telefono" placeholder="Teléfono"></p>
                <?= $valida->ImprimirError('telefono') ?>
            </div>
            <div class="grupo-imput">
                <label for="correo">Correo</label>
                <p><input type="text" name="correo" placeholder="Correo"></p>
                <?= $valida->ImprimirError('correo') ?>
            </div>
            <div class="grupo-imput">
                <label for="domicilio">Domicilio</label>
                <p><input type="text" name="domicilio" placeholder="Domicilio"></p>
                <?= $valida->ImprimirError('domicilio') ?>
            </div>
            <div class="grupo-imput">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <p><input type="date" name="fechaNacimiento"></p>
                <?= $valida->ImprimirError('fecha_nacimiento') ?>
            </div>
            <div class="grupo-imput">
                <label for="password">Contraseña</label>
                <p><input type="password" name="newPw" placeholder="Contraseña"></p>
                <?= $valida->ImprimirError('password') ?>
            </div>
            <div class="botones">
                <p id="regis"><input type="submit" name="registro" value="Registrarse" class="registro"></p>
            </div>
            <p><a href="index.php?menu=login">¿Ya tienes cuenta?</a></p>
        </form>
    </div>
    
</body>

</html>
