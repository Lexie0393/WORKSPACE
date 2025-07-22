<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 | Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="cabecera">
        <h1 class="contenedor">Solución ejercicio 6</h1>
        <a href="index.php"><button class="boton">Inicio</button></a>
    </header>
    <main class="contenedor">
       <ul>
        <li><?php echo $_POST["nombre"];?></li>
        <li><?php echo $_POST["edad"];?></li>
        <li><?php  echo $_POST["municipio"];?></li>
       </ul> 
    </main>
    <footer class="contenedor cabecera">
        <p>David Pérez Piñeiro | IFCD0210 - Desarrollo de aplicaciones con tecnologías web</p>
    </footer>
</body>

</html>