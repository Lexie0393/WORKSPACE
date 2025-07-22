<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>TreeHuggerExcursions</title>
    <link rel="shortcut icon" href="img/mitologia.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel='stylesheet' href='css/style.css'>
    <link rel="stylesheet" href="css/resumen.css">
</head>

<body>
    <header class="hero">
        <div class="menu">
            <h1>TreeHuggerExcursions</h1>
            <img id="logo" src="./img/Logo.png" alt="Logotipo de la empresa TreeHuggerExcursions">
            <nav class="nav">
                <ul>
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#servicios">Servicios</a></li>
                    <li><a href="index.php#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <?php

        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        // $personas=(int)$_POST["personas"];
        $personas = intval($_POST["personas"]);
        $reserva = $_POST["dia"];
        $horas = floatval($_POST["duracion"]);
        $precioI = 35;
        $precioC = 30;

        $precioBase=0;
        $precioTotal=0;
        $descuentoPers=0;
        $descuentoDur=0;

        if (($personas < 3) && ($horas == 0.5)) {
            $descuentoDur = 0;
            $precioBase = $precioI * $personas * $horas * 2;
            $precioTotal = $precioBase - $descuentoDur;
        } elseif ((($personas) < 3) && ($horas == 1)) {
            $descuentoDur = 5;
            $precioBase = $precioI * $personas * $horas * 2;
            $precioTotal = $precioBase - ($precioBase * $descuentoDur / 100);
        } elseif ((($personas) < 3) && ($horas == 1.5)) {
            $descuentoDur = 10;
            $precioBase = $precioI * $personas * $horas * 2;
            $precioTotal = $precioBase - ($precioBase * $descuentoDur / 100);
        } elseif ((($personas) < 3) && ($horas >= 2)) {
            $descuentoDur = 20;
            $precioBase = $precioI * $personas * $horas * 2;
            $precioTotal = $precioBase - ($precioBase * $descuentoDur / 100);
        } elseif ((($personas >= 3) && ($personas < 6)) && ($horas < 2)) {
            $descuentoDur = $descuento;
            $precioBase = $precioC * $personas * $horas;
            $precioTotal = $precioBase - ($precioBase * $descuentoDur / 100);
        } elseif ((($personas >= 3) && ($personas < 6)) && ($horas <4)) {
            $descuentoDur = 10;
            $precioBase = $precioC * $personas * $horas;
            $precioTotal = $precioBase - ($precioBase * $descuentoDur / 100);
        } elseif ((($personas >= 3) && ($personas < 6)) && ($horas >= 4)) {
            $descuentoDur = 20;
            $precioBase = $precioC * $personas * $horas;
            $precioTotal = $precioBase - ($precioBase * $descuentoDur / 100);
        } elseif ((($personas >= 6) && ($personas <= 10)) && ($horas < 2)) {
            $descuentoPers=5;
            $precioBase= $precioC*$personas*$horas;
            $precioTotal= (($precioBase) - ($personas * $descuentoPers));
        }elseif ((($personas >= 6) && ($personas <= 10)) && (($horas >= 2) && ($horas < 4))) {
            $descuentoPers = 5;
            $descuentoDur = 10;
            $precioBase = $precioC * $personas * $horas;
            $precioTotal = (($precioBase) - ($personas * $descuentoPers)) - ($precioBase * $descuentoDur / 100);
        } elseif ((($personas >= 6) && ($personas <= 10)) && ($horas >= 4)) {
            $descuentoPers = 5;
            $descuentoDur = 20;
            $precioBase = $precioC * $personas * $horas;
            $precioTotal = (($precioBase) - ($personas * $descuentoPers)) - ($precioBase * $descuentoDur / 100);
        } elseif (($personas > 10) &&  ($horas < 2)) {
            $descuentoPers = 10;
            $descuentoDur = 0;
            $precioBase = $precioC * $personas * $horas;
            $precioTotal = (($precioBase) - ($personas * $descuentoPers)) - ($precioBase * $descuentoDur / 100);
        } elseif (($personas > 10) &&  (($horas >= 2) && ($horas < 4))) {
            $descuentoPers = 10;
            $descuentoDur = 10;
            $precioBase = $precioC * $personas * $horas;
            $precioTotal = (($precioBase) - ($personas * $descuentoPers)) - ($precioBase * $descuentoDur / 100);
        } elseif (($personas > 10) && ($horas >= 4)) {
            $descuentoPers = 10;
            $descuentoDur = 20;
            $precioBase = $precioC * $personas * $horas;
            $precioTotal = (($precioBase) - ($personas * $descuentoPers)) - ($precioBase * $descuentoDur / 100);
        }



        ?>

        <?php
        $textoPicnic = "Picnic natural: No";
        $precioPicnic = "0";
        if (isset($_POST['picnic'])) {
            $textoPicnic = "Picnic natural: 20€/persona";
            $precioPicnic = 20 * $personas;
            $precioTotal = $precioTotal + $precioPicnic;
        }
        ?>

        <?php
        $textoKit = "Kit de bienestar Natural: No";
        $precioKit = "0";
        if (isset($_POST['kit'])) {
            $textoKit = "Kit de bienestar Natural: 40€/persona";
            $precioKit = 40 * $personas;
            $precioTotal = $precioTotal + $precioKit;
        }
        ?>

        <?php
        $textoTransp = "Transporte ecológico: No";
        $precioTransp = "0";
        if (isset($_POST['transporte'])) {
            $textoTransp=  "ecológico: 20€/persona";
            $precioTransp = 20 * $personas;
            $precioTotal = $precioTotal + $precioTransp;
        }
        ?>

        <?php
        $textoFoto = "Sesión de fotos Profesional: No";
        $precioFoto = "0";
        if (isset($_POST['fotos'])) {
            $textoFoto ="Sesión de fotos Profesional: 150€ por sesión";
            $precioFoto = 150;
            $precioTotal = $precioTotal + $precioFoto;
        }
        ?>

        <table>
            <tr>
                <th>CONCEPTO</th>
                <th>DATOS</th>
                <th>PRECIO</th>
            </tr>
            <tr>
                <th>Fecha reserva</th>
                <td><?php echo $reserva; ?></td>
                <td> --- </td>
            </tr>
            <tr>
                <th>Nombre de la reserva</th>
                <td><?php echo $nombre; ?></td>
                <td> --- </td>
            </tr>
            <tr>
                <th>Correo de la reserva</th>
                <td><?php echo $correo; ?></td>
                <td> --- </td>
            </tr>
            <tr>
                <th>Numero de personas</th>
                <td><?php echo $personas; ?> personas</td>
                <td><?php echo $precioBase; ?> €</td>
            </tr>
            <tr>
                <th>Descuento por persona</th>
                <td><?php echo $descuentoPers; ?>€ por persona </td>
                <td><?php echo ($personas * $descuentoPers); ?>€</td>
            </tr>
            <tr>
                <th>Duración de la actividad</th>
                <td><?php echo $horas; ?> h/min</td>
                <td> --- </td>
            </tr>
            <tr>
                <th>Descuento por duración de la actividad</th>
                <td><?php echo $descuentoDur; ?>%</td>
                <td><?php echo ($precioBase * $descuentoDur / 100); ?>€</td>
            </tr>
            <tr>
                <th rowspan="4">Servicios</th>
                <td><?php echo $textoPicnic; ?></td>
                <td><?php echo $precioPicnic; ?>€</td>
            </tr>
            <tr>
                <td><?php echo $textoKit; ?></td>
                <td><?php echo $precioKit; ?>€</td>
            </tr>
            <tr>
                <td><?php echo $textoTransp; ?></td>
                <td><?php echo $precioTransp; ?>€</td>
            </tr>
            <tr>
                <td><?php echo $textoFoto; ?></td>
                <td><?php echo $precioFoto; ?>€</td>
            </tr>
            <tr>
                <th>Precio Base</th>
                <td colspan="2"><?php echo $precioBase; ?>€</td>
            </tr>
            <tr>
                <th>Precio Final</th>
                <td colspan="2"><?php echo $precioTotal; ?>€</td>
            </tr>
        </table>

    </main>
</body>
<footer>
    <div class="fot1">
        <div id="direc">
            <img src="img/monteregionale.png" alt="Fotografia del logotipo de la empresa TreeHuggerExcursions">
            <p><strong>Centro Visita de Monte Livata</strong></p>
            <address>Calle Del Bosque 00028 Subiaco Italia</address>
        </div>
        <div id="redes">
            <img src="img/facebook.png" alt="icono facebook">
            <img src="img/youtube.png" alt="icono youtube">
            <img src="img/instagram.png" alt="icono instagram">
        </div>
    </div>

    <p id="copy">&copy; Creada por Lexie 2025</p>
</footer>

</html>