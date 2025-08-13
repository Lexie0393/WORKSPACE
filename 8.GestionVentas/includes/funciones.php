<?php

// Función para obtener todos los registros de la tabla "cliente"
function mostrarClientes()
{
    // 1. Abrir conexión con la base de datos
    // Este archivo debe definir la variable $db con la conexión mysqli
    include("db_connection.php");

    // 2. Inicializamos un array vacío donde guardaremos todas las filas
    $datos = [];

    // 3. Escribimos la consulta SQL
    $sql = "SELECT id, CONCAT(nombre, ' ', apellido1, ' ', COALESCE(apellido2, '')) AS nombre_completo, ciudad, categoria FROM cliente;";

    // 4. Ejecutamos la consulta
    // mysqli_query devuelve un "resultado" si es SELECT o true/false si es INSERT/UPDATE/DELETE
    $result = mysqli_query($db, $sql);

    // 5. Comprobamos si hubo un error en la consulta
    if (!$result) {
        // Mostramos el error y detenemos la ejecución
        exit("Error en la consulta: " . mysqli_error($db));
    }

    // 6. Recorremos el resultado fila a fila
    // mysqli_fetch_assoc devuelve cada fila como un array asociativo: ['columna' => valor]
    // Si no hay más filas, devuelve null y el bucle termina
    while ($fila = mysqli_fetch_assoc($result)) {
        // Añadimos cada fila al array $datos
        $datos[] = $fila;
    }

    // 7. Liberar la memoria que usaba el resultado (buena práctica con SELECT)
    mysqli_free_result($result);

    // 8. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 9. Devolver el array con todos los datos
    return $datos;
}


// Función para insertar un nuevo cliente en la tabla "cliente"
function insertarCliente($nombre, $apellido1, $apellido2, $ciudad, $categoria)
{
    // 1. Abrir conexión con la base de datos
    include("db_connection.php");

    // 2. Limpiar los datos para evitar inyección SQL
    // mysqli_real_escape_string() evita caracteres peligrosos en las cadenas
    $nombre    = mysqli_real_escape_string($db, $nombre);
    $apellido1 = mysqli_real_escape_string($db, $apellido1);
    $apellido2 = mysqli_real_escape_string($db, $apellido2);
    $ciudad    = mysqli_real_escape_string($db, $ciudad);
    $categoria = (int)$categoria; // Si es número, lo convertimos a entero

    // 3. Crear la consulta SQL de inserción
    $sql = "INSERT INTO cliente (nombre, apellido1, apellido2, ciudad, categoria)
              VALUES ('$nombre', '$apellido1', '$apellido2', '$ciudad', $categoria)";

    // 4. Ejecutar la consulta
    $resultado = mysqli_query($db, $sql);

    // 5. Comprobar si la consulta fue correcta
    if (!$resultado) {
        // Mostrar el error y detener la ejecución
        exit("Error al insertar cliente: " . mysqli_error($db));
    }

    // 6. Obtener el ID del nuevo cliente insertado (si se quisiera usar para algo)
    $nuevoId = mysqli_insert_id($db);

    // 7. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 8. Devolver el ID del nuevo cliente (útil si queremos usarlo después)
    return $nuevoId;
}

function insertarComercial($nombre, $apellido1, $apellido2, $comision)
{
    // 1. Abrir conexión con la base de datos
    include("db_connection.php");

    // 2. Limpiar los datos para evitar inyección SQL
    // mysqli_real_escape_string() evita caracteres peligrosos en las cadenas
    $nombre    = mysqli_real_escape_string($db, $nombre);
    $apellido1 = mysqli_real_escape_string($db, $apellido1);
    $apellido2 = mysqli_real_escape_string($db, $apellido2);
    $comision = (float)$comision; // Si es número decimal, lo convertimos a float

    // 3. Crear la consulta SQL de inserción
    $sql = "INSERT INTO comercial (nombre, apellido1, apellido2, comision)
              VALUES ('$nombre', '$apellido1', '$apellido2', '$comision')";

    // 4. Ejecutar la consulta
    $resultado = mysqli_query($db, $sql);

    // 5. Comprobar si la consulta fue correcta
    if (!$resultado) {
        // Mostrar el error y detener la ejecución
        exit("Error al insertar comercial: " . mysqli_error($db));
    }

    // 6. Obtener el ID del nuevo comercial insertado (si se quisiera usar para algo)
    $nuevoId = mysqli_insert_id($db);

    // 7. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 8. Devolver el ID del nuevo comercial (útil si queremos usarlo después)
    return $nuevoId;
}

function insertarPedido($total, $fecha, $id_cliente, $id_comercial)
{
    // 1. Abrir conexión con la base de datos
    include("db_connection.php");

    // 2. Limpiar los datos para evitar inyección SQL
    // mysqli_real_escape_string() evita caracteres peligrosos en las cadenas
    $total    = mysqli_real_escape_string($db, $total);
    $fecha = mysqli_real_escape_string($db, $fecha);
    $cliente = mysqli_real_escape_string($db, $id_cliente);
    $comercial    = mysqli_real_escape_string($db, $id_comercial);
    $total = (float)$total; // Si es número, lo convertimos a float

    // 3. Crear la consulta SQL de inserción
    $sql = "INSERT INTO pedido (total, fecha, id_cliente, id_comercial)
              VALUES ('$total', '$fecha', '$cliente', '$comercial')";

    // 4. Ejecutar la consulta
    $resultado = mysqli_query($db, $sql);

    // 5. Comprobar si la consulta fue correcta
    if (!$resultado) {
        // Mostrar el error y detener la ejecución
        exit("Error al insertar cliente: " . mysqli_error($db));
    }

    // 6. Obtener el ID del nuevo cliente insertado (si se quisiera usar para algo)
    $nuevoId = mysqli_insert_id($db);

    // 7. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 8. Devolver el ID del nuevo cliente (útil si queremos usarlo después)
    return $nuevoId;
}


// Función simplificada para mostrar los datos de los clientes con sus pedidos que hicieron alguna compra
function mostrarClientesConPedidos()
{
    include("db_connection.php");

    $datos = [];

    $sql = "SELECT DISTINCT c.* FROM cliente c JOIN pedido p ON c.id=p.id_cliente;";

    // En esta condición comprobamos si el resultado de la sentencia es null o false, si es así devolvemos el error, sino recorremos el resultado y lo guardamos en un array de objetos
    if (!$result = mysqli_query($db, $sql)) {
        exit(mysqli_error($db));
    }

    while ($fila = mysqli_fetch_assoc($result)) {
        $datos[] = $fila;
    }

    mysqli_free_result($result);

    mysqli_close($db);

    return $datos;
}

// Función simplificada para mostrar los datos de los comerciales
function mostrarComerciales()
{
    include("db_connection.php");

    $datos = [];

    $sql = "SELECT id, CONCAT(nombre, ' ', apellido1, ' ', apellido2) AS nombre_completo, comision FROM comercial;";

    // En esta condición comprobamos si el resultado de la sentencia es null o false, si es así devolvemos el error, sino recorremos el resultado y lo guardamos en un array de objetos
    if (!$result = mysqli_query($db, $sql)) {
        exit(mysqli_error($db));
    }

    while ($fila = mysqli_fetch_assoc($result)) {
        $datos[] = $fila;
    }

    mysqli_free_result($result);

    mysqli_close($db);

    return $datos;
}

// Funcion simplificada para mostrar los datos de los comerciales con sus beneficios
function mostrarComercialBeneficio(){
    include("db_connection.php");

    $datos = [];

    $sql = "SELECT CONCAT(co.nombre, ' ', co.apellido1, ' ', COALESCE(co.apellido2, '')) AS nombre_completo, COUNT(p.id) AS cantidad_pedido, ROUND(AVG(p.total), 2) AS precio_medio, ROUND(SUM(p.total*co.comision), 2) AS beneficios FROM   comercial co JOIN pedido p ON co.id=p.id_comercial GROUP BY nombre_completo;";

     // En esta condición comprobamos si el resultado de la sentencia es null o false, si es así devolvemos el error, sino recorremos el resultado y lo guardamos en un array de objetos
    if (!$result = mysqli_query($db, $sql)) {
        exit(mysqli_error($db));
    }

    while ($fila = mysqli_fetch_assoc($result)) {
        $datos[] = $fila;
    }

    mysqli_free_result($result);

    mysqli_close($db);

    return $datos;
}

// Funcion simplificada para mostrar los gastos de los pedidos por ciudad
function mostrarGastosCiudad() {

    include("db_connection.php");

    $datos = [];

    $sql = "SELECT cl.ciudad, ROUND(SUM(p.total), 2) AS gastos FROM cliente cl JOIN pedido p ON p.id_cliente=cl.id GROUP BY cl.ciudad ORDER BY gastos DESC;";

     // En esta condición comprobamos si el resultado de la sentencia es null o false, si es así devolvemos el error, sino recorremos el resultado y lo guardamos en un array de objetos
    if (!$result = mysqli_query($db, $sql)) {
        exit(mysqli_error($db));
    }

    while ($fila = mysqli_fetch_assoc($result)) {
        $datos[] = $fila;
    }

    mysqli_free_result($result);

    mysqli_close($db);

    return $datos;
}

// Funcion simplificada para mostrar los gastos de los pedidos por ciudad
function mostrarPedido() {

    include("db_connection.php");

    $datos = [];

    $sql = "SELECT p.id, CONCAT(cl.nombre, ' ', cl.apellido1, ' ', COALESCE(cl.apellido2, '')) AS datos_clientes, CONCAT(co.nombre, ' ', co.apellido1, ' ', co.apellido2) AS datos_comerciales, p.fecha, p.total FROM pedido p JOIN cliente cl ON p.id_cliente=cl.id JOIN comercial co ON p.id_comercial=co.id ORDER BY p.id ASC;";

     // En esta condición comprobamos si el resultado de la sentencia es null o false, si es así devolvemos el error, sino recorremos el resultado y lo guardamos en un array de objetos
    if (!$result = mysqli_query($db, $sql)) {
        exit(mysqli_error($db));
    }

    while ($fila = mysqli_fetch_assoc($result)) {
        $datos[] = $fila;
    }

    mysqli_free_result($result);

    mysqli_close($db);

    return $datos;
}

function eliminarPedido($id)
{
    // 1. Abrir conexión con la base de datos
    include("db_connection.php");

    // 2. Limpiar los datos para evitar inyección SQL
    // mysqli_real_escape_string() evita caracteres peligrosos en las cadenas
    $id = mysqli_real_escape_string($db, $id);
    $id = (int)$id; // Si es número, lo convertimos a int

    // 3. Crear la consulta SQL de inserción
    $sql = "DELETE FROM pedido WHERE id=$id";

    // 4. Ejecutar la consulta
    $resultado = mysqli_query($db, $sql);

    // 5. Comprobar si la consulta fue correcta
    if (!$resultado) {
        // Mostrar el error y detener la ejecución
        exit("Error al insertar cliente: " . mysqli_error($db));
    }

    // 7. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 8. Devolver el ID del nuevo cliente (útil si queremos usarlo después)
    return $nuevoId;
}

function modificarPedido($id, $total, $fecha)
{
    // 1. Abrir conexión con la base de datos
    include("db_connection.php");

    // 2. Limpiar los datos para evitar inyección SQL
    // mysqli_real_escape_string() evita caracteres peligrosos en las cadenas
    $id = mysqli_real_escape_string($db, $id);
    $id = (int)$id;
    $total = mysqli_real_escape_string($db, $total);
    $fecha = mysqli_real_escape_string($db, $fecha);
    $total = (float)$total; // Si es número, lo convertimos a float
    

    // 3. Crear la consulta SQL de inserción
    $sql = "UPDATE pedido SET fecha = '$fecha', total = $total WHERE id= $id ;";

    // 4. Ejecutar la consulta
    $resultado = mysqli_query($db, $sql);

    // 5. Comprobar si la consulta fue correcta
    if (!$resultado) {
        // Mostrar el error y detener la ejecución
        exit("Error: " . mysqli_error($db));
    }

    // 6. Obtener el ID del nuevo cliente insertado (si se quisiera usar para algo)
    $nuevoId = mysqli_insert_id($db);

    // 7. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 8. Devolver el ID del nuevo cliente (útil si queremos usarlo después)
    return $nuevoId;
}