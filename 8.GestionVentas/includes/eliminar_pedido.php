<?php
// Cargamos todas las funciones que creamos previamente para poder insertar un cliente en la base de datos
include_once("funciones.php");

// Guardamos en variables los valores que se escribieron en cada input del formulario
$id=$_GET['id'];

// Llamamos a la función que crea al cliente
eliminarPedido($id);


// Redirigimos a la página principal
header("Location: ../index.php");