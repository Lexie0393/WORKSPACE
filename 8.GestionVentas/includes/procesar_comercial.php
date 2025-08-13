<?php
// Cargamos todas las funciones que creamos previamente para poder insertar un cliente en la base de datos
include_once("funciones.php");

// Guardamos en variables los valores que se escribieron en cada input del formulario
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$comision=$_POST['comision'];
$comision=($comision/100);

// Llamamos a la función que crea al cliente
insertarComercial($nombre, $apellido1, $apellido2, $comision);


// Redirigimos a la página principal
header("Location: ../index.php");