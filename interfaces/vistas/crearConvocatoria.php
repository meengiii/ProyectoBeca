<?php

    require_once $_SERVER["DOCUMENT_ROOT"] . '/helpers/sesion.php';

    // Creamos validator
    $valida = new Validator();
    Sesion::iniciar_sesion();
    $user = Sesion::leer_sesion("usuario");
    $nombre = $user->getNombre();

    if (isset($_POST['menu']) && $_POST['menu'] === 'login') 
    {
        // Cerrar la sesión y redirigir al usuario a la página de inicio
        Sesion::cerrar_session();
        header('Location: index.php');
        exit();
    }

    if (!Sesion::leer_sesion("usuario"))
    {
        Sesion::cerrar_session();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea convocatoria</title>
    <link rel="stylesheet" href="http://virtual.localfj.com/interfaces/estilos/nav.css">
    <link rel="stylesheet" href="http://virtual.localfj.com/interfaces/estilos/convocatoria.css">
    <link rel="stylesheet" href="http://virtual.localfj.com/interfaces/estilos/despegable.css">
    
</head>


<body>
    <nav>
        <div id="nav">
            <div id="izquierda">
            <a href="?menu=home">
                <img src="http://virtual.localfj.com/interfaces/imagenes/logo.png" id="imagenIzquierda" alt="Texto alternativo">
            </a>
            </div>
            <div id="centro">
                <h1>Crear Convocatoria</h1>
            </div>
            <div id="derecha">
                <div id="menuDesplegable" style="display: none;">
                    <ul>
                        <li><a href="?menu=perfil">Bienvenido <?php echo $nombre; ?></li>
                        <li><a href="?menu=login">Cerrar Sesión</a></li>
                    </ul>
                </div>
                <img src="http://virtual.localfj.com/interfaces/imagenes/usuario.png" alt="Foto Derecha" id="imagenDerecha" onclick="mostrarMenu()">
            </div> 
        </div>
    </nav>
    <script src="http://virtual.localfj.com/interfaces/js/despegable.js"></script>
    <form>
        <fieldset>
            <label for="proyecto" name="proyecto">Proyecto:</label>
            <select id="proyecto">
                <option selected disabled>Selecciona un proyecto</option>
            </select>
            <span class="error"><?= $valida->ImprimirError('proyecto') ?></span>

            <label for="movilidades">Movilidades:</label>
            <input type="number" id="movilidades" name="movilidades">
            <span class="error"><?= $valida->ImprimirError('movilidades') ?></span>
        </fieldset>

        <fieldset>
            <label for="tipo">Tipo:</label>
            <select id="tipo">
                <option selected disabled>Selecciona un tipo</option>
            </select>

            <label for="destino">Destino:</label>
            <input type="text" id="destino" name="destino">
            <span class="error"><?= $valida->ImprimirError('destino') ?></span>
        </fieldset>
        <fieldset>
            <label for="fecha_inicio">Fecha inicio:</label>
            <input type="date" id="fecha_inicio"name="fecha_inicio">

            <label for="fecha_inicio_prueba">Fecha inicio prueba:</label>
            <input type="date" id="fecha_inicio_prueba" name="fecha_inicio_prueba">

            <label for="fecha_listado_provisional">Fecha listado provisional:</label>
            <input type="date" id="fecha_listado_provisional" name="fecha_listado_provisional">

        </fieldset>
        <fieldset>
            <label for="fecha_fin">Fecha fin:</label>
            <input type="date" id="fecha_fin" name="fecha_fin">

            <label for="fecha_fin_prueba">Fecha fin prueba:</label>
            <input type="date" id="fecha_fin_prueba" name="fecha_fin_prueba">

            <label for="fecha_listado_definitivo">Fecha listado definitivo:</label>
            <input type="date" id="fecha_listado_definitivo" name="fecha_listado_definitivo">
        </fieldset>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Items</th>
                    <th>Nota max</th>
                    <th>Requisito</th>
                    <th>Nota min</th>
                    <th>Aporta alumno</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Nota</td>
                    <td><input type="number"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="number"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Idioma</td>
                    <td><input type="number"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="number"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Idoneidad</td>
                    <td><input type="number"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="number"></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Entrevista</td>
                    <td><input type="number"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="number"></td>
                    <td><input type="checkbox"></td>
                </tr>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>Nivel</th>
                    <th>Nota</th>
                    <th>Nivel</th>
                    <th>Nota</th>
                    <th>Nivel</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A1</td>
                    <td><input type="text"></td>
                    <td>B1</td>
                    <td><input type="text"></td>
                    <td>C1</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>A2</td>
                    <td><input type="text"></td>
                    <td>B2</td>
                    <td><input type="text"></td>
                    <td>C2</td>
                    <td><input type="text"></td>
                </tr>
            </tbody>
        </table>

        <button type="submit">Crear Convocatoria</button>
    </form>
</body>

</html>