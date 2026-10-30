<?php
session_start();
include('conexion.php');

$error = "";

//formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: iniciar.php");
        exit();
    } else {
        $error = "Error al registrar la cuenta: " . $conexion->error;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Martiniano E Diele Lucas Prado">
    <link rel="stylesheet" href="estiloregistro.css">
    <title>Prado - Registro</title>
</head>

<body>
    <header>
        <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>

        <nav class="nav-header">
            <div class="contactanos">
                <a href="iniciar.php">Iniciar Sesión</a>
            </div>

            <div class="menu">
                <a href="index.php">Volver a Menú</a>
            </div>
        </nav>
    </header>

    <main class="contenedor">
        <div class="registro">
            <h2>REGÍSTRATE A NUESTRA PÁGINA</h2>
        </div>

        <?php if (!empty($error)): ?>
            <p style="color: #ff4d4d; text-align: center; font-weight: bold; margin-bottom: 15px;">
                <?php echo $error; ?>
            </p>
        <?php endif; ?>

        <form action="registrar.php" method="POST">
            <h2>Registro de Usuario</h2>

            <div class="campo">
                <label for="nombre">Ingrese su Nombre y Apellido:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="campo">
                <label for="correo">Ingrese su Correo:</label>
                <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
            </div>

            <div class="campo">
                <label for="contrasena">Ingrese su Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" placeholder="Escriba contraseña" required>
            </div>

            <div class="botones">
                <button type="submit" class="boton-enviar">Enviar</button>
            </div>  
        </form>
    </main>

    <footer></footer>

</body>

</html>