<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4: listaClase</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <a href="index.php"><span class="material-symbols-outlined">home</span></a>
        <h1>Ejercicio 4: listaClase</h1>
    </header>
    <main>
        <div class="resultado">
            <?php
            // Aquí va la función y su llamada
            function listaClase() {
                $nombres = ["Pablo", "Cesar", "Miguel", "Demian", "juanC", "Lago"];
                echo "<ul>";
                foreach ($nombres as $value) {
                    echo "<li>$value</li>";
                }

                echo "</ul";
            }

            echo listaClase();
            
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; IFCD0210 - Desarrollo de apolicaciones con tecnología web.</p>
    </footer>
</body>

</html>