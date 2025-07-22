<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Viajes Peluchín</title>
    <link rel="shortcut icon" href="img/orfanato.png" type="image/x-icon">
    <link rel='stylesheet' href='css/style.css'>
</head>

<body>
    <header>

        <a href="#inicio">
            <h1>Viajes Peluchín</h1>
        </a>

        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#destinos">Destinos</a>
            <a href="#reserva">Reserva</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <hr>
    <main class="contenedor">
        <form action="resumen.php" method="post">
            <h2>RESERVA TU VIAJE</h2>
            <div class="formulario">
                <div>
                    <label for="nombre" class="required">Nombre de la reserva:</label>
                    <input type="text" class="basic-input" name="nombre" required>
                </div>
                <div>
                    <label for="correo" class="required">Correo electrónico:</label>
                    <input type="email" name="correo" id="correo" class="basic-input" required placeholder="@gmail.com">
                </div>
            </div>
            <div class="formu1">
                <label for="fecha">Fecha de ida:</label>
                <?php
                $manana = date('Y-m-d', strtotime('+1 day'));
                ?>
                <input type="date" class="basic-input" placeholder="dd/mm/aaaa" name="fecha" id="fecha" min="<?php echo $manana;?>">
                    <label for="dias">Duración:</label>
                <input type="number" class="basic-input" name="dias" id="dias" min="1" max="30">
            </div>
            <!-- 
                <div class="formulario-canti">
                    <label for="cantidad">Número de pasajeros:</label>
                    <input type="number" class="basic-input" name="cantidad" id="cantidad" min="1" max="10">
                </div> -->
            <div class="formulario-tamano">

                <h3>TAMAÑO VIAJEROS:</h3>

                <div class="peluches">
                    <div class="peluches-columna">
                        <div>
                            <label for="pelu1">Peluche 1:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu1" step="1">
                        </div>
                        <div>
                            <label for="pelu2">Peluche 2:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu2" step="1">
                        </div>
                        <div>
                            <label for="pelu3">Peluche 3:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu3" step="1">
                        </div>
                        <div>
                            <label for="pelu4">Peluche 4:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu4" step="1">
                        </div>
                        <div>
                            <label for="pelu5">Peluche 5:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu5" step="1">
                        </div>
                    </div>

                    <div class="peluches-columna">
                        <div>
                            <label for="pelu6">Peluche 6:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu6" step="1">
                        </div>
                        <div>
                            <label for="pelu7">Peluche 7:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu7" step="1">
                        </div>
                        <div>
                            <label for="pelu8">Peluche 8:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu8" step="1">
                        </div>
                        <div>
                            <label for="pelu9">Peluche 9:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu9" step="1">
                        </div>
                        <div>
                            <label for="pelu10">Peluche 10:</label>
                            <input type="number" class="basic-input" name="pelu[]" id="pelu10" step="1">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div><button>Enviar</button></div>
        </form>

    </main>
    <hr>
    <footer>
        <p>&copy; Creada por Lexie 2025</p>
    </footer>
</body>

</html>