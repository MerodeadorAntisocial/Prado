<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilocanchas.css">
    <title>Prado - Reserva de turnos</title>
</head>

<body>
    <header class="encabezado">
        <div class="nave">
            <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            <h1>Prado</h1> 
        </div>

        <div class="nave1">
            <?php if (isset($_SESSION['usuario_id'])): ?>
                <a href="reservas.php">Mis Reservas</a>
                <a href="perfil.php">Mi Perfil</a>
                <a href="cerrar_sesion.php">Cerrar Sesión</a>
            <?php else: ?>
                <a href="iniciar.php">Iniciar sesión</a>
                <a href="registrar.php">Regístrate</a>
            <?php endif; ?>
        </div>
    </header>
    
    <main class="turno_y_historia">
        <section class="main-section">
            <div class="turno">
                <a href="turnos.php"><h3>CONSIGUE TU TURNO</h3></a>
            </div>
            
            <div class="historia">
                <h2>Nuestra Historia:</h2>
                <p>Desde 2015, Prado es un espacio creado para disfrutar del fútbol y compartir momentos con amigos. A lo largo de los años fuimos creciendo y mejorando nuestras instalaciones, manteniendo siempre la misma pasión por el deporte.</p>
            </div>

            
            
                <a style="text-decoration:none; color:white; background-color: #35AB45; padding: 10px; border-radius: 25px;"href="eventos.php"><h3>ORGANIZÁ TU EVENTO</h3></a>
            
        </section>

        <section class="ubicacion">
            <div class="lugar">
                <p>UBICACIÓN: Lateral Este Acceso Sur - Juan José Porretta Perdriel Mendoza</p>
            </div>
            <div class="maps">
                <a href="https://www.google.com/maps/place/KM+FUTBOL,+CANCHAS+DE+FÚTBOL/@-33.0843307,-68.8751679,84m/data=!3m1!1e3!4m6!3m5!1s0x967e75c6e8099d67:0xe086445a581a18a0!8m2!3d-33.0843947!4d-68.874905!16s%2Fg%2F11crx_v7xx?entry=ttu&g_ep=EgoyMDI2MDkzMC4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">
                    <img src="imagenes/cancha.jpeg" alt="Mapa de ubicación">
                </a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <a href="contacto.php">Contacto</a>
        <a href="redes.php">Redes Sociales</a>
        <a href="ayuda.php">Ayuda</a>
        <a href="terminos.php">Términos y Condiciones</a>
    </footer>
</body>
</html>