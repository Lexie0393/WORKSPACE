<?php
// Cargamos todas las funciones que creamos previamente para poder insertar un cliente en la base de datos
include_once("funciones.php");

// Guardamos en variables los valores que se escribieron en cada input del formulario
$total=$_POST['total'];
$fecha=$_POST['fecha'];
$id_cliente=$_POST['clientes'];
$id_comercial=$_POST['comerciales'];

// Llamamos a la función que crea al cliente
insertarPedido($total, $fecha, $id_cliente, $id_comercial);


// Redirigimos a la página principal
header("Location: ../index.php");
