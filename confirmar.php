<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['reserva'] = [
        'cancha'  => $_POST['nombre_cancha'],
        'fecha'   => $_POST['fecha_seleccionada'],
        'horario' => $_POST['horario_seleccionado'],
        'precio'  => $_POST['precio']
    ];
}


if (!isset($_SESSION['reserva'])) {
    header("Location: reserva.php");
    exit();
}

$datos = $_SESSION['reserva'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Reserva</title>
    <link rel="stylesheet" href="confirmar.css">
</head>
<body>

    <header class="encabezado">
        <a href="index.php"><img class="logo" src="imagenes/logo.png" alt="Logotipo"></a>
        <h1 class="titulo-principal">CONFIRMAR RESERVA</h1>
        <a href="index.php" class="enlace-inicio">Inicio</a>
    </header>

    <main class="contenedor-principal">
        <h2 class="subtitulo-reserva">Confirmá tu reserva</h2>

        <section class="tarjeta-reserva">
            <article class="tarjeta-cancha">
                <img src="imagenes/imagen.jpeg" alt="Cancha" class="imagen-cancha">
                <span class="nombre-cancha"><?php echo $datos['cancha']; ?></span>
            </article>

            <hr class="linea-divisora">

            <div class="columna-titulos">
                <h3 class="etiqueta">Fecha:</h3>
                <h3 class="etiqueta">Horario:</h3>
                <h3 class="etiqueta">Duración:</h3>
            </div>

            <div class="columna-datos">
                <p class="valor"><?php echo $datos['fecha']; ?></p>
                <p class="valor"><?php echo $datos['horario']; ?></p>
                <p class="valor">1 hora</p>
            </div>

            <p class="precio-total">Total: $<?php echo number_format($datos['precio'], 0, ',', '.'); ?></p>
        </section>

        <a href="pagos.php"><button type="button" class="boton-continuar">Continuar a Pagos</button></a>
    </main>

</body>
</html>