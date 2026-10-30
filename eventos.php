<?php
session_start();

$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensaje = "Solicitud enviada correctamente. Nos pondremos en contacto a la brevedad.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prado - Eventos</title>
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

      <div class="subcabecera">
        <div class="promocion">Cumpleaños, despedidas, reuniones y más.</div>
        <a href="imagenes.php" style="text-decoration:none;"><div class="galeria">IMÁGENES</div></a>
      </div>

      <div class="secciones">
        <!-- Formulario integrado -->
        <form class="formulario" action="eventos.php" method="POST">
          <div class="titular">Reservá tu evento</div>
          <div class="subtitulo">Completá el formulario y nos pondremos en contacto para confirmar la disponibilidad.</div>
          
          <?php if (!empty($mensaje)): ?>
            <p style="color: #2ecc71; text-align: center; font-weight: bold;"><?php echo $mensaje; ?></p>
          <?php endif; ?>

          <div class="bloque">
            <div class="entradas">
              <div class="campo">
                <input type="date" name="fecha" class="entrada" required>
              </div>

              <div class="campo">
                <input type="text" name="horario" placeholder="Horario (desde - hasta)" class="entrada" required>
              </div>

              <div class="campo">
                <input type="number" name="personas" placeholder="Cantidad de personas" class="entrada" required>
              </div>

              <div class="campo">
                <textarea name="comentarios" placeholder="Comentarios adicionales" class="area"></textarea>
              </div>
            </div>
          </div>
          <button type="submit" class="boton">Enviar solicitud</button>
        </form>

        <div class="pasos">
          <div class="instruccion">¿Cómo funciona?</div>
          <div class="guia">
            <div class="paso">
              <div class="circulo">1</div>
              <div class="explicacion">Completá el formulario</div>
            </div>
            <div class="linea"></div>
            <div class="paso">
              <div class="circulo">2</div>
              <div class="explicacion">Enviar la solicitud</div>
            </div>
            <div class="linea"></div>
            <div class="paso">
              <div class="circulo">3</div>
              <div class="explicacion">Esperar respuesta</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>