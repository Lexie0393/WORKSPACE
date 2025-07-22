<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 | Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="cabecera">
        <h1 class="contenedor">Solución ejercicio 7</h1>
        <a href="index.php"><button class="boton">Inicio</button></a>
    </header>
    <main class="contenedor">
        <?php
        if (isset($_POST ["fecha_nacimiento"])) {
            $fecha_nacimiento = $_POST["fecha_nacimiento"];
            // $anho_nacimiento= substr($nacimiento, 0, 3);
            $hoy = new DateTime();
            $intervalo = $hoy -> diff($fecha_nacimiento);
            $edad= $intervalo-> y;

        }

?>

         <table>
            <tr>
                <th>Nombre</th>
                <th>Fecha Nacimiento</th>
                <th>Colores favoritos</th>
            </tr>
            <tr>
                <td><?php echo $_POST["nombre"]; ?></td>
                <td><?php echo $_POST["fecha_nacimiento"]; ?></td>
                <td><?php echo $_POST["color_favorito"]; ?></td>
            </tr>

        </table>
    </main>
    <footer class="contenedor cabecera">
        <p>David Pérez Piñeiro | IFCD0210 - Desarrollo de aplicaciones con tecnologías web</p>
    </footer>
</body>

</html>