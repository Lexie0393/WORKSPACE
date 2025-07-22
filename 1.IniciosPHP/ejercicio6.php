<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6: generarNumerosAleatorios</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <a href="index.php"><span class="material-symbols-outlined">home</span></a>
        <h1>Ejercicio 6: generarNumerosAleatorios</h1>
    </header>
    <main>
        <div class="resultado">
            <?php
            // Aquí va la función y su llamada
            
            function generarNumerosAleatorios($min, $max, $cant) {
                $numAl = rand($min, $max);
                $array=[];
                for ($i=0; $i<$cant; $i++) {
                    array_push($array, rand($min, $max));
                }
                
                return $array;
            }

            $arrNumAl = generarNumerosAleatorios(0, 50, 5);

            foreach($arrNumAl as $num){
                echo "<p>$num</p>";
            }
            
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; IFCD0210 - Desarrollo de apolicaciones con tecnología web.</p>
    </footer>
</body>

</html>