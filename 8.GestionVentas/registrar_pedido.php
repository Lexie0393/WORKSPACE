<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión ventas | Registrar pedido</title>
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <!-- Iconos Sharp -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Incluímos la página cabecera.php que incluye el código con la cabecera y los enlaces entre páginas -->
    <?php include('cabecera.php'); 
    include_once('includes/funciones.php');
    ?> 
    <main>
        <div class="card contenedor">
            <h2>Indique los datos del pedido que quieres dar de alta</h2>
            <form class="secciones" action="includes/procesar_pedido.php" method="post">
                <div>
                    <label for="total">total: </label>
                    <input type="number" step="0.01" name="total" id="total">
                </div>
                <div>
                    <label for="fecha">Fecha: </label>
                    <input type="date" name="fecha" id="fecha" value="<?php echo date('Y-m-d');?>">
                </div>
                <div>
                    <label for="clientes">Clientes: </label>
                    <select name="clientes" id="clientes">
                        <?php include_once ('includes/funciones.php');
                        $clientes= mostrarClientes();
                        foreach ($clientes as $cliente) {
                        ?>
                            <option value="<?php echo $cliente['id'];?>"><?php echo $cliente['nombre_completo'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                 <div>
                    <label for="comerciales">Comerciales: </label>
                    <select name="comerciales" id="comerciales">
                        <?php include_once ('includes/funciones.php');
                        $comerciales= mostrarComerciales();
                        foreach ($comerciales as $comercial) {
                        ?>
                            <option value="<?php echo $comercial['id'];?>"><?php echo $comercial['nombre_completo'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>

    </main>
    <footer class="contenedor cabecera">
        <p>David Pérez Piñeiro | IFCD0210 Desarrollo de aplicaciones con tecnologías web</p>
    </footer>
</body>

</html>