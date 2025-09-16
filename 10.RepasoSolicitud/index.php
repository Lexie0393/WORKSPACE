<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>REPASO SOLICITUD</title>
    <link rel='stylesheet' href='css/style.css'>
</head>

<body>
    <header>
        <h1>SOLICITUD</h1>
    </header>
    <main class="contenedor">
        <section class="card">
            <div>
              <a href="mostrarDatos.php">Mostrar Datos</a>
            </div>
            <div class="seccion">
                <form action="includes/solicitar_empleo.php" method="post">
                    <div>
                        <label for="nombre">Nombre completo: </label>
                        <input type="text" id="nombre" name="nombre">
                    </div>
                    <div>
                        <p>Elige el tipo de contrato deseado: </p>
                        <input type="radio" name="contrato" id="jornada_completa" value="completa">
                        <label for="jornada_completa">Jornada completa</label>
                        <input type="radio" name="contrato" id="media_jornada" value="media">
                        <label for="media_jornada">Media jornada</label>
                        <input type="radio" name="contrato" id="freelance" value="free">
                        <label for="freelance">Freelance</label>
                    </div>
                    <div>
                        <p>Elige tu área de interés: </p>
                        <select name="area_interes" id="area_interes">
                            <option value="rrhh">Recursos humanos</option>
                            <option value="software">Desarrollo software</option>
                            <option value="marketing">Marketing</option>
                            <option value="ventas">Ventas</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; Creada por Lexie 2025</p>
    </footer>
</body>

</html>