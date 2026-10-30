<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eventos.css">
    <title>Prado - Valoraciones</title>
</head>

<body class="cuerpo">
    <div class="contenedor">
        <div class="lateral">
            <div class="marca">
                <img src="imagenes/logo.png" alt="Logo" class="emblema">
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
            <div class="pestana">
                <div class="titulo">Valoraciones</div>
            </div>

            <div class="secciones">
                <div class="columna">
                    <div class="encabezado">
                        <span class="subtitular">Opiniones de </span>
                        <span class="destacado">nuestros clientes</span>
                        <img src="imagenes/4EF644DB-DAF7-48C3-B756-2A90520D98DF.png" alt="Pelota" class="pelota">
                    </div>

                    <div class="promedio">
                        <div class="nota">4,5</div>
                        <div class="resumen">
                            <div class="estrellas">
                                <img src="imagenes/estrella.png" alt="Estrella" class="estrella">
                                <img src="imagenes/estrella.png" alt="Estrella" class="estrella">
                                <img src="imagenes/estrella.png" alt="Estrella" class="estrella">
                                <img src="imagenes/estrella.png" alt="Estrella" class="estrella">
                                <img src="imagenes/estrella.png" alt="Estrella" class="estrella">
                            </div>
                            <div class="conteo">Basado en 90 valoraciones</div>
                        </div>
                    </div>

                    <div class="subtitular">Opiniones recientes</div>

                    <div class="opinion">
                        <img src="imagenes/usuario.png" alt="Usuario" class="foto">
                        <div class="contenido">
                            <div class="cabecera">
                                <span class="autor">Gabriel C.</span>
                            </div>
                            <p class="texto">Muy buena cancha, el césped está en buenas condiciones y pasamos un excelente momento con amigos.</p>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="cartel">
                        <img src="imagenes/estrella.png" alt="Estrella" class="icono">
                        <div class="informacion">
                            <div class="titular">Dejá tu valoración</div>
                            <div class="subtitulo">Contanos cómo fue tu experiencia</div>
                        </div>
                    </div>

                    <div class="caja">
                        <div class="rotulo">Tu comentario</div>
                        <textarea placeholder="Escribí tu opinión..." class="area"></textarea>
                        <button class="boton">Enviar valoración</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>