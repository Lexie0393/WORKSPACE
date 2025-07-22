<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1: FizzBuzz</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <a href="index.php"><span class="material-symbols-outlined">home</span></a>
        <h1>Ejercicio 1: FizzBuzz</h1>
    </header>
    <main>
        <div class="resultado">
            <?php
            // Aquí va la función y su llamada
            function FizzBuzz ($num) {
                
                if (($num % 3 ==0) && ($num % 5 == 0)) {
                    echo "FizzBuzz";
                }  else if ($num % 3 ==0) {
                    echo "Fizz";
                } else if ($num % 5 == 0) {
                    echo "Buzz";
                } else if (($num % 3 !=0) && ($num % 5 != 0)) {
                    echo $num;
                } 
            }

            FizzBuzz(3);
            FizzBuzz(5);
            FizzBuzz(15);
            FizzBuzz(7);
            
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; IFCD0210 - Desarrollo de apolicaciones con tecnología web.</p>
    </footer>
</body>

</html>