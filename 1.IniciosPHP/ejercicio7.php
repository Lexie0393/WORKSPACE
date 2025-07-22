<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7: sumaParesArray</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <a href="index.php"><span class="material-symbols-outlined">home</span></a>
        <h1>Ejercicio 7: sumaParesArray</h1>
    </header>
    <main>
        <div class="resultado">
            <?php
            // Aquí va la función y su llamada
            function sumaParesArray($array) {

                $suma = 0;
                foreach ($array as $valor) {
                    if ($valor % 2 == 0) {
                        $suma = $suma + $valor;
                    }
                }
                return $suma;
            }

            $array = [1, 2, 3, 4, 5, 6];
           echo "El resultado de la suma del array es ".  sumaParesArray($array);
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; IFCD0210 - Desarrollo de apolicaciones con tecnología web.</p>
    </footer>
</body>

</html>