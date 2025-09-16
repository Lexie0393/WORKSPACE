<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>SOLICITUD | Mostrar Datos</title>
<link rel='stylesheet' href='css/style.css'>
</head>
<body>
    <header>
        <a href="index.php"><h1>MOSTRAR DATOS</h1></a>
    </header>
    <main>
         <?php
            include_once("includes/funciones.php");

            // Guardamos en variables los valores que se escribieron en cada input del formulario
            // $nombre = $_POST['nombre'];
            // $contrato = $_POST['contrato'];
            // $area_interes = $_POST['area_interea'];

            // Llamamos a la función que crea a la raza

            ?>
        <section>
            <div>
                <table>
                    <tr>
                        <th>Nombre del solicitante: </th>
                        <th>Tipo de contrato: </th>
                        <th>Area de interés: </th>
                    </tr>
                    <?php include_once('includes/funciones.php');
                    $solicitudes = mostrarDatos();
                    foreach ($solicitudes as $solicitud) {
                    ?>

                    <tr>
                        <td><?php echo $solicitud['nombre'];?></td>
                        <td><?php echo $solicitud['tipo_contrato'];?></td>
                        <td><?php echo $solicitud['area_interes'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </section>
        
    </main>
    <footer>
        <p>&copy; Creada por Lexie 2025</p>
    </footer>
</body>
</html>