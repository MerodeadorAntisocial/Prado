<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ayuda.css">
    <title>Prado - Ayuda</title>
</head>

<body>
    <header class="encabezado">
        <div class="nave">
            <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            <h1>Prado</h1> 
        </div>

        <div class="nave1">
            <a href="turnos.php">Reservas</a>
            <a href="contacto.php">Contacto</a>
            <a href="index.php">Inicio</a>
        </div>
        <a class="usuario" href="perfil.php"><img src="imagenes/usuario.png" alt="Perfil"></a>
    </header>
    
    <div class="ayuda">
        <h2>Ayuda</h2>
    </div>

    <h2 style="margin-left: 25px; margin-top:10px">Preguntas Frecuentes</h2>

    <div class="contenedor_de_preguntas">

        <div class="pregunta">
            <h3>¿Cómo reservo un turno?</h3>
            <p style="color: white;" class="respuesta">Debes iniciar sesión, ir a la sección "Reservas", elegir la cancha, seleccionar la fecha u horario disponible y confirmar tu método de pago.</p>
        </div>

        <div class="pregunta">
            <h3>¿Qué métodos de pago aceptan?</h3>
            <p style="color: white;" class="respuesta">Aceptamos transferencias por Billetera Virtual (Mercado Pago) y pago en Efectivo de forma presencial.</p>
        </div>
        
        <div class="pregunta">
            <h3>¿Cómo puedo ver mis horarios?</h3>
            <p style="color: white;"class="respuesta">Ingresando a tu perfil desde el ícono superior derecho podrás consultar la información de tu cuenta y reservas activas.</p>
        </div>
    </div>

    <div class="contactar">
        <h4 class="titulo">¿Necesitas más ayuda?</h4>
        <p class="comunicar">¿Tienes otra duda?</p>
        <p class="comunicar">¡¡Comunícate con nosotros!!</p>
        <a href="https://web.whatsapp.com" target="_blank"><h3>Contactar por Whatsapp</h3></a>
    </div>

    <footer class="footer">
        <a href="contacto.php">Contacto</a>
        <a href="redes.php">Redes Sociales</a>
        <a href="terminos.php">Términos y Condiciones</a>
    </footer>
</body>
</html>