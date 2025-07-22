<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Viajes Peluchín</title>
    <link rel="shortcut icon" href="img/orfanato.png" type="image/x-icon">
    <link rel='stylesheet' href='css/style.css'>
    <link rel="stylesheet" href="css/resumen.css">
</head>

<body>
    <header>

        <a href="index.php#inicio">
            <h1>Viajes Peluchín</h1>
        </a>

        <nav>
            <a href="index.php#inicio">Inicio</a>
            <a href="#destinos">Destinos</a>
            <a href="#reserva">Reserva</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <hr>
    <main>
        <?php
        // var_dump($_POST);
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $fecha = $_POST["fecha"];
        $date = new DateTime($fecha);
        $dias = intval($_POST["dias"]);
        $tamano = $_POST["pelu"];

        $precioBase = 0;
        $dtoDias = 0;
        $dtoPeluches = 0;
        $cantidad = 0;

        //  Tarifas peluche por dias (Precio Base) y cantidad de peluches

        foreach ($tamano as $value) {
            if (!empty($value)) {
                $cantidad = $cantidad + 1;
                if ($value < 20) {
                    $precioBase = $precioBase + (10 * $dias);
                } else if (($value >= 20) && ($value < 50)) {
                    $precioBase = $precioBase + (25 * $dias);
                } else if (($value >= 50) && ($value < 100)) {
                    $precioBase = $precioBase + (50 * $dias);
                } else if ($value >= 100) {
                    $precioBase = $precioBase + (100 * $dias);
                }
            }
        }

        // Descuento de peluche por dia

        if ($cantidad > 5) {
            $dtoPeluches = $dtoPeluches + (10 * $dias);
        } elseif ($cantidad > 3) {
            $dtoPeluches = $dtoPeluches + (5 * $dias);
        }

        // Descuento de tiempo de viaje

        if ($dias >= 15) {
            $dtoDias = 50;
        } elseif ($dias >= 8) {
            $dtoDias = 20;
        }

        // Calculo Precio Final

        $precioFinal = $precioBase - ($dtoDias) - ($dtoPeluches);
        $dtoTotal = $dtoDias + $dtoPeluches;
        ?>

        <section class="reserva-contenido">
            <h2>RESERVA</h2>
            <div>
                <p>VIAJES PELUCHIN</p>
                <p>Av. Europa 123</p>
                <p>Vigo, 36208</p>
            </div>
            <h3>Datos Generales:</h3>
            <table>
                <tr>
                    <th>DESCRIPCIÓN</th>
                    <th>DATOS</th>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><?php echo $nombre; ?></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><?php echo $correo; ?></td>
                </tr>
                <tr>
                    <td>Fecha reserva:</td>
                    <td><?php echo $date->format('d-m-Y'); ?></td>
                </tr>
            </table>


            <table>
                <tr>
                    <th>DESCRIPCIÓN</th>
                    <th>NUM.</th>
                    <th>Dto.</th>
                </tr>
                <tr>
                    <td>Nº Pasajeros:</td>
                    <td><?php echo $cantidad; ?></td>
                    <td><?php echo $dtoPeluches; ?>€</td>
                </tr>
                <tr>
                    <td>Días:</td>
                    <td><?php echo $dias; ?></td>
                    <td><?php echo $dtoDias; ?>€</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th>PRECIO BASE:</th>
                    <td><?php echo $precioBase; ?></td>
                </tr>
                <tr>
                    <th>Dto. TOTAL:</th>
                    <td><?php echo $dtoTotal; ?></td>
                </tr>
                <tr>
                    <th>PRECIO TOTAL:</th>
                    <td><?php echo $precioFinal; ?></td>
                </tr>
            </table>
        </section>
    </main>
    <hr>
    <footer>
        <p>&copy; Creada por Lexie 2025</p>
    </footer>
</body>

</html>