<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 | Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="cabecera">
        <h1 class="contenedor">Solución ejercicio 5</h1>
        <a href="index.php"><button class="boton">Inicio</button></a>
    </header>
    <main class="contenedor">

        <!-- <img src="./img/gallina.jpg" alt="mascota_favorita">
    <img src="./img/Gato.jpg" alt="mascota_favorita">
    <img src="./img/Perro.png" alt="mascota_favorita">
    <img src="./img/Suricato.webp" alt="mascota_favorita">
    <img src="./img/Vaca.webp" alt="mascota_favorita"> -->
        <?php

        if (isset($_GET["imagen"])) {
            if (($_GET['mascota_favorita']) == "gallina") {
                echo '<img src="./img/gallina.jpg" alt="gallina">';
            } else if (($_GET['mascota_favorita']) == "gato") {
                echo '<img src="./img/Gato.jpg" alt="gato">';
            } else if (($_GET['mascota_favorita']) == "perro") {
                echo '<img src="./img/Perro.png" alt="perro">';
            } else if (($_GET['mascota_favorita']) == "suricato") {
                echo '<img src="./img/Suricato.webp" alt="suricato">';
            } else if (($_GET['mascota_favorita']) == "vaca") {
                echo '<img src="./img/Vaca.webp" alt="vaca">';
            } else if (($_GET['mascota_favorita']) == "---") {
                echo "No has marcado ninguna opcion";
            } 
        } else {
                echo "<p>Has escogido: $nombreArchivo</p>";
            }
        ?>
    </main>
    <footer class="contenedor cabecera">
        <p>David Pérez Piñeiro | IFCD0210 - Desarrollo de aplicaciones con tecnologías web</p>
    </footer>
</body>

</html>