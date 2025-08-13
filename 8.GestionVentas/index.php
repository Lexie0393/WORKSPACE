<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión ventas | Inicio</title>
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <!-- Iconos Sharp -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
    <?php include('cabecera.php'); ?>
    <main>
        <div class="card contenedor">
            <div class="secciones">
                <div class="seccion">
                    <h2 class="cabecera">Clientes</h2>
                    <table>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Ciudad</th>
                            <th>Categoría</th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $clientes = mostrarClientes();
                        foreach ($clientes as $cliente) {
                        ?>
                            <tr>
                                <td><?php echo $cliente['nombre_completo'] ?></td>
                                <td><?php echo $cliente['ciudad'] ?></td>
                                <td><?php echo $cliente['categoria'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="seccion">
                    <h2 class="cabecera">Clientes con pedidos</h2>
                    <table>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Ciudad</th>
                            <th>Categoría</th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $clientes = mostrarClientesConPedidos();
                        foreach ($clientes as $cliente) {
                        ?>
                            <tr>
                                <td><?php echo $cliente['nombre'] . " " . $cliente['apellido1'] . " " . $cliente['apellido2'] ?></td>
                                <td><?php echo $cliente['ciudad'] ?></td>
                                <td><?php echo $cliente['categoria'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="seccion">
                    <h2 class="cabecera">Comerciales</h2>
                    <table>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Comisión</th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $comerciales = mostrarComerciales();
                        foreach ($comerciales as $comercial) {
                        ?>
                            <tr>
                                <td><?php echo $comercial['nombre_completo'] ?></td>
                                <td><?php echo $comercial['comision'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="seccion">
                    <h2 class="cabecera">Beneficios de Comerciales</h2>
                    <table>
                        <tr>
                            <th>Nombre completo: </th>
                            <th>Cantidad del pedido: </th>
                            <th>Precio medio: </th>
                            <th>Beneficios del comercial: </th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $comerciales = mostrarComercialBeneficio();
                        foreach ($comerciales as $comercial) {
                        ?>
                            <tr>
                                <td><?php echo $comercial['nombre_completo'] ?></td>
                                <td><?php echo $comercial['cantidad_pedido'] ?></td>
                                <td><?php echo $comercial['precio_medio'] ?></td>
                                <td><?php echo $comercial['beneficios'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="seccion">
                    <h2 class="cabecera">Gastos de las ciudades</h2>
                    <table>
                        <tr>
                            <th>Nombre de la ciudad: </th>
                            <th>Gastos de los pedidos: </th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $ciudades = mostrarGastosCiudad();
                        foreach ($ciudades as $ciudad) {
                        ?>
                            <tr>
                                <td><?php echo $ciudad['ciudad'] ?></td>
                                <td><?php echo $ciudad['gastos'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="seccion">
                    <h2 class="cabecera">Pedidos</h2>
                    <table>
                        <tr>
                            <th>Datos de los clientes: </th>
                            <th>Datos de los comerciales: </th>
                            <th>Fecha: </th>
                            <th>Total pedido: </th>
                        </tr>
                        <?php
                        include_once("includes/funciones.php");
                        $pedidos = mostrarPedido();
                        foreach ($pedidos as $pedido) {
                        ?>
                            <tr>
                                <td><?php echo $pedido['datos_clientes'] ?></td>
                                <td><?php echo $pedido['datos_comerciales'] ?></td>
                                <td><?php echo $pedido['fecha'] ?></td>
                                <td><?php echo $pedido['total'] ?></td>
                                <td><a href="includes/eliminar_pedido.php?id=<?php echo $pedido['id']; ?>"><span class="material-symbols-outlined">
                                            delete
                                        </span></a><a href="modificar_pedido.php?id=<?php echo $pedido['id'];?>&total=<?php echo $pedido['total'];?>&fecha=<?php echo $pedido['fecha'];?>&cliente=<?php echo $pedido['datos_clientes'];?>&comercial=<?php echo $pedido['datos_comerciales'];?>"><span class="material-symbols-outlined">
                                            edit
                                        </span></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </main>
    <footer class="contenedor cabecera">
        <p>David Pérez Piñeiro | IFCD0210 Desarrollo de aplicaciones con tecnologías web</p>
    </footer>
</body>

</html>