<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET y POST | Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="cabecera">
        <h1 class="contenedor">2.FormulariosPHP</h1>
        <a href="index.php"><button class="boton">Inicio</button></a>
    </header>
    <main class="ejercicios">
        <h2 class="contenedor">Ejercicios</h2>

        <!-- ------------------------------------------------------------------------------------------ -->
        <!-- Ejercicio 1 -->
        <!-- ------------------------------------------------------------------------------------------ -->
        <div class="ejercicio contenedor">
            <h2 class="numero">Ejercicio 1</h2>
            <h3>Recoge los datos del siguiente formulario en la página <i>ej1.php</i> y muéstralos por pantalla. Ten en cuenta que este formulario utiliza el método GET.</h3>

            <form class="formulario" action="ej1.php" method="get">
                <div class="fila">
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" name="nombre_usuario">
                </div>
                <div class="fila">
                    <label for="edad">Edad: </label>
                    <input type="number" id="edad" name="edad_usuario">
                </div>
                <div class="fila">
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <!-- ------------------------------------------------------------------------------------------ -->
        <!-- Ejercicio 2 -->
        <!-- ------------------------------------------------------------------------------------------ -->
        <div class="ejercicio contenedor">
            <h2 class="numero">Ejercicio 2</h2>
            <h3>Recoge los datos del siguiente formulario en la página <i>ej2.php</i> y muéstralos por pantalla. Además, valida los datos, comprobando que el nombre no está en blanco y que la edad es un número entre 1 y 100. Ten en cuenta que este formulario utiliza el método POST.</h3>

            <form class="formulario" action="ej2.php" method="post">
                <div class="fila">
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" name="nombre_usuario">
                </div>
                <div class="fila">
                    <label for="edad">Edad: </label>
                    <input type="number" id="edad" name="edad_usuario">
                </div>
                <div class="fila">
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <!-- ------------------------------------------------------------------------------------------ -->
        <!-- Ejercicio 3 -->
        <!-- ------------------------------------------------------------------------------------------ -->
        <div class="ejercicio contenedor">
            <h2 class="numero">Ejercicio 3</h2>
            <h3>Recoge los datos del siguiente formulario en la página <i>ej3.php</i>. Realiza con ellos una suma y muéstrala por pantalla.</h3>

            <form class="formulario" action="ej3.php" method="post">
                <div class="fila">
                    <label for="numero1">Número 1: </label>
                    <input type="number" id="numero1" name="numero_uno">
                </div>
                <div class="fila">
                    <label for="numero2">Número 2: </label>
                    <input type="number" id="numero2" name="numero_dos">
                </div>
                <div class="fila">
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <!-- ------------------------------------------------------------------------------------------ -->
        <!-- Ejercicio 4 -->
        <!-- ------------------------------------------------------------------------------------------ -->
        <div class="ejercicio contenedor">
            <h2 class="numero">Ejercicio 4</h2>
            <h3>Recoge los datos del siguiente formulario en la página <i>ej4.php</i>. <br> Muestra por pantalla el nombre de la mascota escogida. Completa el elemento form con el método GET y los datos necesarios.</h3>

            <form class="formulario" action="ej4.php" method="get">
                <label for="mascota">Escoge a tu mascota favorita: </label>
                <div class="fila">
                    <input type="radio" id="mascota1" name="mascota_fav" value="Gallina">
                    <label for="mascota1">Gallina</label>
                </div>
                <div class="fila">
                    <input type="radio" id="mascota2" name="mascota_fav" value="Perro">
                    <label for="mascota2">Perro</label>
                </div>
                <div class="fila">
                    <input type="radio" id="mascota3" name="mascota_fav" value="Suricato">
                    <label for="mascota3">Suricato</label>
                </div>
                <div class="fila">
                    <input type="radio" id="mascota4" name="mascota_fav" value="Gato">
                    <label for="mascota4">Gato</label>
                </div>
                <div class="fila">
                    <input type="radio" id="mascota5" name="mascota_fav" value="Vaca">
                    <label for="mascota5">Vaca</label>
                </div>
                <div class="fila">
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <!-- ------------------------------------------------------------------------------------------ -->
        <!-- Ejercicio 5 -->
        <!-- ------------------------------------------------------------------------------------------ -->
        <div class="ejercicio contenedor">
            <h2 class="numero">Ejercicio 5</h2>
            <h3>Recoge los datos del siguiente formulario en la página <i>ej5.php</i>. <br> Si el checkbox de mostrar imagen está marcado, muestra una imagen de la mascota que se ha escogido, sino, muestra un texto donde se indique que mascota escogió. <br> Completa el elemento form con el método GET y los datos necesarios.</h3>

            <form class="formulario" action="ej5.php" method="get">
                <label for="mascota">Escoge a tu mascota favorita: </label>
                <div class="fila">
                    <select id="mascota" name="mascota_favorita">
                        <option value="ninguna">---</option>
                        <option value="gallina">Gallina</option>
                        <option value="perro">Perro</option>
                        <option value="suricato">Suricato</option>
                        <option value="gato">Gato</option>
                        <option value="vaca">Vaca</option>
                    </select>
                </div>
                <div class="fila">
                    <input type="checkbox" id="mostrar_imagen" name="imagen" value="true">
                    <label for="mostrar_imagen">Marcar para mostrar imagen de la mascota.</label><br>
                </div>
                <div class="fila">
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <!-- ------------------------------------------------------------------------------------------ -->
        <!-- Ejercicio 6 -->
        <!-- ------------------------------------------------------------------------------------------ -->
        <div class="ejercicio contenedor">
            <h2 class="numero">Ejercicio 6</h2>
            <h3>Recoge los datos del siguiente formulario en la página <i>ej6.php</i> con el método POST. <br> Muestra por pantalla todos los datos que se rellenaron en el formulario en forma de lista, donde me ponga en cada línea el campo que se rellena y su valor (-Nombre: David. -Edad: 28...).</h3>

            <form class="formulario" action="ej6.php" method="post">
                <div class="fila">
                    <label for="nombre_usuario">Nombre: </label>
                    <input type="text" id="nombre_usuario" name="nombre">
                </div>
                <div class="fila">
                    <label for="edad_usuario">Edad: </label>
                    <input type="number" id="edad_usuario" name="edad">
                </div>
                <label for="mascota">Municipio: </label>
                <div class="fila">
                    <input type="radio" id="m1" name="municipio" value="tomino">
                    <label for="m1">Tomiño</label>
                </div>
                <div class="fila">
                    <input type="radio" id="m2" name="municipio" value="aguarda">
                    <label for="m2">A Guarda</label>
                </div>
                <div class="fila">
                    <input type="radio" id="m3" name="municipio" value="oia">
                    <label for="m3">Oia</label>
                </div>
                <div class="fila">
                    <input type="radio" id="m4" name="municipio" value="orosal">
                    <label for="m4">O Rosal</label>
                </div>
                <div class="fila">
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <!-- ------------------------------------------------------------------------------------------ -->
        <!-- Ejercicio 7 -->
        <!-- ------------------------------------------------------------------------------------------ -->
        <div class="ejercicio contenedor">
            <h2 class="numero">Ejercicio 7</h2>
            <h3>Recoge los datos del siguiente formulario en la página <i>ej7.php</i> con el método POST. <br> Muestra por pantalla todos los datos que se rellenaron en el formulario en forma de tabla, en la cabecera el nombre del dato que le da valor y en una fila todos sus valores.<br>¿Nos atrevemos a mostrar en otra columna de la tabla la edad (calculandola con la fecha de nacimiento)?</h3>

            <form class="formulario" action="ej7.php" method="post">
                <div class="fila">
                    <label for="nombre_usuario">Nombre: </label>
                    <input type="text" id="nombre_usuario" name="nombre">
                </div>
                <div class="fila">
                    <label for="fecha_nac">Fecha Nacimiento: </label>
                    <input type="date" id="fecha_nac" name="fecha_nacimiento">
                </div>
                <label for="color">Colores favoritos: </label>
                <div class="fila">
                    <select id="color" name="color_favorito">
                        <option value="ninguno">---</option>
                        <option value="azul">Azul</option>
                        <option value="verde">Verde</option>
                        <option value="rojo">Rojo</option>
                        <option value="violeta">Violeta</option>
                        <option value="negro">Negro</option>
                    </select>
                </div>
                <div class="fila">
                    <input class="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <!-- ------------------------------------------------------------------------------------------ -->
        <!-- Ejercicio 8 -->
        <!-- ------------------------------------------------------------------------------------------ -->
        <div class="ejercicio contenedor">
            <h2 class="numero">Ejercicio 8</h2>
            <h3>Crea un formulario que tenga lo siguiente: </h3>
            <ul>
                <li>Nombre</li>
                <li>Apellidos</li>
                <li>Correo electrónico</li>
                <li>Un selector con tres destinos a dónde ir de viaje (inventados los destinos).</li>
                <li>Una fecha de ida para el viaje.</li>
                <li>Una fecha de vuelta para el viaje.</li>
            </ul>
            <!-- <h3>-Nombre.</h3>
            <h3>-Apellidos.</h3>
            <h3>-Correo electrónico.
                <h3>-Un selector con tres destinos a dónde ir de viaje (inventados los destinos).</h3>
                <h3>-Una fecha de ida para el viaje.</h3>
                <h3>-Una fecha de vuelta para el viaje.</h3> -->
            <br>
            <h3> Recoge los datos en la página <i>ej8.php</i> con el método POST. <br> Muestra por pantalla un texto como el del siguiente ejemplo, pero con los valores extraídos del formulario:</h3> <br>
            <h4><i> David Pérez Piñeiro con el correo davidperez@gmail.com se quiere ir de viaje a Australia entre el 01/08/23 hasta el 10/08/23</i></h4>

            <!-- Crear formulario aqui -->
            <form class="formulario" action="ej8.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">

                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos">

                <label for="email">Correo electrónico</label>
                <input type="email" name="correo" id="email">

                <label for="destinos">Dónde ir de viaje:</label>
                <select id="destino" name="destino">
                    <option value="australia">Australia</option>
                    <option value="mexico">México</option>
                    <option value="suiza">Suiza</option>
                </select>

                <label for="fecha_ida">Fecha Ida: </label>
                <input type="date" id="fecha_ida" name="fecha_ida">

                <label for="fecha_vuelta">Fecha vuelta: </label>
                <input type="date" id="fecha_vuelta" name="fecha_vuelta">

                <input class="boton" type="submit" value="Enviar">
            </form>
        </div>
    </main>
    <footer class="contenedor cabecera">
        <p>David Pérez Piñeiro | IFCD0210 - Desarrollo de aplicaciones con tecnologías web</p>
    </footer>

</body>

</html>