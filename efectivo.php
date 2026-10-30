<?php
session_start();
$reserva = $_SESSION['reserva_confirmada'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prado - Efectivo</title>
    <link rel="stylesheet" href="pagos.css">
</head>
<body>

    <header>
        <div class="nave">
            <img src="imagenes/logo.png" alt="Logo">
            <h2>Efectivo</h2>
            <a href="index.php" class="inicio">Inicio</a>
        </div>
    </header>

    <div class="boton-volver-container">
        <a href="pagos.php" class="volver">Volver</a>
    </div>

    <div class="main-content">
        <div class="seleccion">¡Casi listo!</div>

        <div class="seleccion2">
            <div class="seleccion">
                Revisá los datos de tu turno y enviá una captura del detalle al WhatsApp para coordinar tu reserva.
            </div>

            <h3 class="titulo">Detalle:</h3>
            <?php if ($reserva): ?>
                <p>Cancha: <?php echo htmlspecialchars($reserva['cancha']); ?></p>
                <p>Fecha: <?php echo htmlspecialchars($reserva['fecha']); ?></p>
                <p>Horario: <?php echo htmlspecialchars($reserva['horario']); ?></p>
                <p>Duración: 1 hora.</p>
                <p>Total: $<?php echo number_format($reserva['precio'], 0, ',', '.'); ?></p>
            <?php else: ?>
                <p>No se encontraron detalles de la reserva.</p>
            <?php endif; ?>
        </div>

        <div class="boton-cancelar-container">
            
            <a href="https://wa.me/5492612595291" class="btn-whatsapp" target="_blank">Enviar por WhatsApp</a>
            <a href="index.php" class="turno">Volver al Inicio</a>
        </div>
    </div>

</body>
</html>