<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Procesar Datos</title>
    <link rel='stylesheet' href='css/style.css'>
</head>

<body>
    <header>
        <h1>Datos Enviados:</h1>
    </header>
    <main>
        <section>
            <div>
                <div>
                    <a href="../index.php">Atrás</a>
                </div>
            </div>
            <?php
            include_once("../includes/funciones.php");

            // Guardamos en variables los valores que se escribieron en cada input del formulario
            $nombre = $_POST['nombre'];
            $contrato = $_POST['contrato'];
            $area_interes = $_POST['area_interes'];

            // Llamamos a la función que crea a la raza
            insertarDatos($nombre, $contrato, $area_interes);

            ?>
            <div>
                <p>
                    "Gracias por completar nuestra solicitud de empleo.
                    Hemos recibido su solicitud para el puesto en el área de <?php echo $area_interes; ?>
                    con preferencia de contrato <?php echo $contrato; ?>.
                    Nos pondremos en contacto contigo, <?php echo $nombre; ?>,
                    si tu perfil cumple con los requisitos del puesto.
                    Apreciamos su interés en formar parte de nuestro equipo."
                </p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; Creada por Lexie 2025</p>
    </footer>
</body>

</html>