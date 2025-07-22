<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 | Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="cabecera">
        <h1 class="contenedor">Solución ejercicio 2</h1>
        <a href="index.php"><button class="boton">Inicio</button></a>
    </header>
    <main class="contenedor">
        
<?php
if (empty($_POST["nombre_usuario"])) {
    echo "ERROR: el nombre está vacio";
} else if (isset($_POST["nombre_usuario"])) {
    echo $_POST["nombre_usuario"];
}

if (($_POST["edad_usuario"]>=1) && ($_POST["edad_usuario"]<=100)) {
    echo $_POST["edad_usuario"];
} else {
    echo "No tienes la edad comprendida entre los valores 1 y 100.";
}

?>
    </main>
    <footer class="contenedor cabecera">
        <p>David Pérez Piñeiro | IFCD0210 - Desarrollo de aplicaciones con tecnologías web</p>
    </footer>
</body>

</html>