<?php
session_start();
if (!isset($_SESSION['reserva'])) {
    header("Location: reserva.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagos.css">
    <title>Prado - Métodos de Pago</title>
</head>

<body>
    <header class="encabezado">
        <div class="nave">
            <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            <h1>Prado</h1> 
            <h2>MÉTODOS DE PAGO</h2>
        </div>
    </header>
    
    <main class="principal">
        <div class="boton-volver-container">
            <a class="volver" href="confirmar.php">Volver</a>
        </div>

        <div>
            <h3 class="seleccion">Seleccione método de pago</h3>
        </div>

        <div class="contenedor_de_pagos">
            <div class="pago">
                <h2>Tarjeta de débito / crédito</h2>
                <img src="imagenes/elec.png" alt="Tarjeta">
                <h3>Tarjeta de crédito o débito</h3>
                <a href="guardar_reserva.php?metodo=Tarjeta">Elige este método</a>
            </div>

            <div class="pago">
                <h2>Billetera virtual</h2>
                <img src="imagenes/pago.png" alt="Billetera virtual">
                <h3>Mercado Pago y otras billeteras</h3>
                <a href="guardar_reserva.php?metodo=Billetera Virtual">Elige este método</a>
            </div>

            <div class="pago">
                <h2>Efectivo</h2>
                <img src="imagenes/icono_efectivo.png" alt="Efectivo">
                <h3>Pago Presencial</h3>
                <a href="guardar_reserva.php?metodo=Efectivo">Elige este método</a>
            </div>
        </div>
    </main>

    <footer>
        <a href="ayuda.php">Ayuda</a>
        <a href="contacto.php">Contacto</a>
        <a href="redes.php">Redes sociales</a>
    </footer>
</body>
</html>