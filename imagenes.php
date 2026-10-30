<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prado - Imágenes</title>
    <link rel="stylesheet" href="eventos.css">
</head>

<body class="cuerpo">
    <div class="contenedor">
        <div class="lateral">
            <div class="marca">
                <a href="index.php"><img src="imagenes/logo.png" alt="Logo" class="emblema"></a>
                <p class="rotulo">Prado</p>
            </div>

            <div class="usuario">
                <a href="perfil.php"><img src="imagenes/usuario.png" alt="Perfil" class="avatar"></a>
            </div>

            <div class="menu">
                <a href="index.php" class="enlace"><p>Inicio</p></a>
                <a href="contacto.php" class="enlace"><p>Contacto</p></a>
                <a href="ayuda.php" class="enlace"><p>Ayuda</p></a>
                <a href="terminos.php" class="enlace"><p>Términos y Condiciones</p></a>
            </div>
        </div>

        <div class="principal">
            <div class="portada">
                <img src="imagenes/imagen.jpeg" alt="Cancha" class="fotografia">
                <div class="lema">Tu evento en la cancha</div>
            </div>

            <div class="pestana">
                <div class="titulo">IMÁGENES</div>
            </div>

            <div class="mosaico">
                <div class="superior">
                    <img src="imagenes/ejemplo.jpeg" alt="Imagen 1" class="cuadro">
                    <img src="imagenes/ejemplo2.jpeg" alt="Imagen 2" class="cuadro">
                    <img src="imagenes/ejemplo4.jpeg" alt="Imagen 3" class="cuadro">
                </div>

                <div class="inferior">
                    <img src="imagenes/ejemplo3.jpeg" alt="Imagen 4" class="tarjeta">
                    <img src="imagenes/mapa.jpeg" alt="Imagen 5" class="tarjeta">
                </div>
            </div>
        </div>
    </div>
</body>
</html>