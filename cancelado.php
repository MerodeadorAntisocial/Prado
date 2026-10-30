<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cancelar.css">
    <title>Prado - Cancelar turno</title>
</head>

<body>
    <header class="encabezado">
        <div class="nave">
            <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            <h1>Cancelar turno</h1> 
        </div>

        <div class="navegador">
            <a href="index.php">Inicio</a>
        </div>
        <a href="perfil.php"><img class="usuario" src="imagenes/usuario.png" alt="Perfil"></a>
    </header>
    
    <div class="cancelar1">
        <h3>Turno Anulado</h3>
        <div class="texto">
            <p>
                El turno ha sido cancelado correctamente, 
                el reembolso se le será devuelto a su cuenta en 1 o 2 semanas hábiles.
            </p>
            <a href="index.php"><h4>Volver al menú</h4></a>
        </div>
    </div>

    <footer class="footer">
        <a href="contacto.php">Contacto</a>
        <a href="redes.php">Redes Sociales</a>
        <a href="ayuda.php">Ayuda</a>
        <a href="terminos.php">Términos y Condiciones</a>
    </footer>
</body>
</html>