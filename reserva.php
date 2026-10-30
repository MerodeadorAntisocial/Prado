<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Turno - Cancha Grande</title>
    <link rel="stylesheet" href="reserva.css">
</head>
<body>

    <header class="encabezado-principal">
        <a href="turnos.php"><img class="imagen-logo" src="imagenes/logo.png" alt="Logotipo"></a>
        <h1 class="titulo-principal">RESERVA DE TURNO</h1>
        <a href="turnos.php" class="enlace-inicio">Volver a Turnos</a>
    </header>

    <form action="confirmar.php" method="POST" class="contenedor-contenido">
        
        <input type="hidden" name="nombre_cancha" value="Cancha grande">
        <input type="hidden" name="precio" value="50400">

        <section class="columna-seccion">
            <div class="etiqueta-titulo">Fechas disponibles</div>
            
            <div class="tarjeta-cancha">
                <img src="imagenes/imagen.jpeg" alt="Cancha grande" class="imagen-cancha">
                <p class="nombre-cancha">Cancha grande</p>
            </div>

            <h2 class="subtitulo-paso">1- Elegí una fecha</h2>

            <div class="contenedor-campo-fecha">
                <label for="selector-fecha-nativo" class="etiqueta-campo-fecha">Seleccionar fecha directa:</label>
                <input type="date" id="selector-fecha-nativo" name="fecha_seleccionada" class="entrada-fecha" required>
            </div>
        </section>

        <div class="linea-divisora"></div>

        <section class="columna-seccion">
            <div class="etiqueta-titulo">Horarios disponibles</div>

            <h2 class="subtitulo-paso">2- Elegí un horario</h2>
            <p class="descripcion-horarios">Horarios disponibles para la fecha seleccionada</p>

            <div class="lista-horarios">
                <input type="radio" name="horario_seleccionado" id="horario-18-19" value="18:00 - 19:00" class="radio-oculto" required>
                <label for="horario-18-19" class="tarjeta-horario">18:00 - 19:00</label>

                <input type="radio" name="horario_seleccionado" id="horario-19-20" value="19:00 - 20:00" class="radio-oculto">
                <label for="horario-19-20" class="tarjeta-horario">19:00 - 20:00</label>

                <input type="radio" name="horario_seleccionado" id="horario-20-21" value="20:00 - 21:00" class="radio-oculto">
                <label for="horario-20-21" class="tarjeta-horario">20:00 - 21:00</label>

                <input type="radio" name="horario_seleccionado" id="horario-21-22" value="21:00 - 22:00" class="radio-oculto">
                <label for="horario-21-22" class="tarjeta-horario">21:00 - 22:00</label>

                <input type="radio" name="horario_seleccionado" id="horario-2230-2330" value="22:30 - 23:30" class="radio-oculto">
                <label for="horario-2230-2330" class="tarjeta-horario">22:30 - 23:30</label>

                <input type="radio" name="horario_seleccionado" id="horario-2330-0030" value="23:30 - 00:30" class="radio-oculto">
                <label for="horario-2330-0030" class="tarjeta-horario">23:30 - 00:30</label>
            </div>

            <div class="contenedor-boton-continuar">
                <button type="submit" class="boton-continuar">Continuar</button>
            </div>
        </section>

    </form>

</body>
</html>