<?php
session_start();
$reserva = $_SESSION['reserva_confirmada'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prado - Tarjeta de Débito</title>
    <link rel="stylesheet" href="pagos.css">
</head>
<body>

    <header class="encabezado">
        <div class="nave">
            <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            <h2 class="titulo-debito">TARJETA DE DÉBITO</h2>
        </div>
        <div class="nave-inicio">
            <a href="index.php" class="link-inicio">Inicio</a>
        </div>
    </header>

    <main class="main-content contenedor-pago-tarjeta">
        <div class="columna-formulario">
            <div class="badge-tarjeta">
                Pago con tarjeta de débito
            </div>

            <div class="caja-formulario-tarjeta">
                <form action="iexitoso.php" method="POST" class="form-debito">
                    <div class="grid-tarjeta">
                        <div class="campo-tarjeta col-izq">
                            <label for="num-tarjeta">Número de tarjeta</label>
                            <input type="text" id="num-tarjeta" name="num-tarjeta" placeholder="1234 5678 9012 3456" required>
                        </div>

                        <div class="campo-tarjeta col-der">
                            <label for="cvv">Cod. seguridad</label>
                            <input type="text" id="cvv" name="cvv" placeholder="CVV" maxlength="4" required>
                        </div>

                        <div class="campo-tarjeta col-izq">
                            <label for="titular">Nombre del titular</label>
                            <input type="text" id="titular" name="titular" placeholder="Como aparece en la tarjeta" required>
                        </div>

                        <div class="campo-tarjeta col-izq">
                            <label for="vencimiento">Vencimiento</label>
                            <input type="text" id="vencimiento" name="vencimiento" placeholder="MM/AA" maxlength="5" required>
                        </div>
                    </div>

                    <div class="contenedor-btn-continuar">
                        <button type="submit" class="btn-continuar">Pagar y Confirmar</button>
                    </div>
                </form>
            </div>
        </div>

        <aside class="columna-resumen">
            <div class="tarjeta-resumen-reserva">
                <div class="resumen-header">
                    <img src="imagenes/imagen.jpeg" alt="Cancha" class="img-resumen-cancha">
                    <span class="info-cancha-tipo"><?php echo htmlspecialchars($reserva['cancha'] ?? 'Cancha'); ?></span>
                </div>

                <div class="resumen-detalles">
                    <div class="item-detalle">
                        <p>Fecha: <?php echo htmlspecialchars($reserva['fecha'] ?? '-'); ?></p>
                    </div>

                    <div class="item-detalle">
                        <p>Horario: <?php echo htmlspecialchars($reserva['horario'] ?? '-'); ?></p>
                    </div>
                </div>

                <hr class="linea-resumen">

                <div class="resumen-total-fila">
                    <p class="label-total">Total:</p>
                    <p class="monto-total">$<?php echo number_format($reserva['precio'] ?? 0, 0, ',', '.'); ?></p>
                </div>
            </div>
        </aside>
    </main>

    <footer>
        <a href="ayuda.php">Ayuda</a>
        <a href="contacto.php">Contacto</a>
        <a href="redes.php">Redes sociales</a>
    </footer>

</body>
</html>