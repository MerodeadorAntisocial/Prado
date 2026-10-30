<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagos.css">
    <title>Prado - Billetera Virtual</title>
</head>
<body>

    <header class="encabezado">
        <div class="nave">
            <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            <h1>Prado</h1> 
            <h2>MÉTODOS DE PAGO</h2>
        </div>
    </header>

    <main class="main-content">
        <div class="boton-volver-container">
            <a class="volver" href="index.php">Volver al menú</a>
        </div>

        <section class="tarjeta-pago">
            <h3 class="titulo-metodo">Pago con Billetera Virtual</h3>

            <div class="paso-pago">
                <p class="paso-instruccion">Transfiera al siguiente Alias o CVU:</p>
                
                <div class="caja-alias">
                    <p class="label-alias">ALIAS RECEPTOR</p>
                    <h2 class="alias-codigo">ALIAS.CANCHAS.MP</h2>
                    <p class="alias-titular">Titular: Ortiz Lucas Matias</p>
                </div>
            </div>

            <div class="paso-pago">
                <p class="paso-instruccion">Envíe el comprobante para confirmar su reserva:</p>
                
                <a class="btn-whatsapp" href="https://web.whatsapp.com" target="_blank">
                    Enviar Comprobante por WhatsApp
                </a>
            </div>
        </section>
    </main>

    <footer>
        <a href="terminos.php">Términos y Condiciones</a>
        <a href="contacto.php">Contacto</a>
        <a href="redes.php">Redes sociales</a>
    </footer>

</body>
</html>