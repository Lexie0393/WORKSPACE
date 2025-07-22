<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 | Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="cabecera">
        <h1 class="contenedor">Solución ejercicio 8</h1>
        <a href="index.php"><button class="boton">Inicio</button></a>
    </header>
    <main class="contenedor">
    <?php 
    $nombre= $_POST["nombre"];
    $apellidos= $_POST["apellidos"];
    $correo= $_POST["correo"];
    $destino= $_POST["destino"];


    $ida=  $_POST["fecha_ida"];
    $time = strtotime($ida);
    $ida_formateada= date("d/m/Y", $time);
    $vuelta= $_POST["fecha_vuelta"];
    $times1 = strtotime($vuelta);
    $vuelta_formateada= date("d/m/Y", $times1);

    echo "$nombre $apellidos con el correo $correo se quiere ir de viaje a $destino entre el $ida_formateada hasta el $vuelta_formateada";

    ?>    

    </main>
    <footer class="contenedor cabecera">
        <p>David Pérez Piñeiro | IFCD0210 - Desarrollo de aplicaciones con tecnologías web</p>
    </footer>
</body>

</html>