<?php
// Cargamos todas las funciones que creamos previamente para poder insertar un cliente en la base de datos
include_once("funciones.php");

// Guardamos en variables los valores que se escribieron en cada input del formulario
$total=$_POST['total'];
$fecha=$_POST['fecha'];
$id_pedido=$_POST['id_pedido'];

// Llamamos a la función que crea al cliente
modificarPedido($id_pedido, $total, $fecha);


// Redirigimos a la página principal
header("Location: ../index.php");