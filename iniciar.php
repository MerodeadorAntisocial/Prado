<?php
session_start();
include('conexion.php');

$error = "";

// Si los datos se enviaron mediante la pulsación del botón "Enviar"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        $_SESSION['usuario_id'] = $usuario['id'];
        
        header("Location: perfil.php");
        exit();
    } else {
        $error = "Correo o contraseña incorrectos.";
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
    <title>Prado - Iniciar Sesión</title>
</head>

<body>
    <header>
        <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>

        <nav class="nav-header">
            <div class="contactanos">
                <a href="registrar.php">Crear Cuenta</a>
            </div>

            <div class="menu">
                <a href="index.php">Volver a Menú</a>
            </div>
        </nav>
    </header>

    <main class="contenedor">
        <div class="registro">
            <h2>INICIA SESIÓN EN TU CUENTA</h2>
        </div>
        
        <?php if (!empty($error)): ?>
            <p style="color: #ff4d4d; text-align: center; font-weight: bold; margin-bottom: 15px;">
                <?php echo $error; ?>
            </p>
        <?php endif; ?>

        <form action="iniciar.php" method="POST">
            <h2>Sesión de Usuario</h2>

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