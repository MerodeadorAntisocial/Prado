<?php
session_start();
include('conexion.php');

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: iniciar.php");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];
$mensaje = "";

// Guardar los cambios realizados en Perfil
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_update = "UPDATE usuarios SET nombre = '$nombre', correo = '$email', contrasena = '$password' WHERE id = '$id_usuario'";
    
    if ($conexion->query($sql_update) === TRUE) {
        $mensaje = "Datos actualizados correctamente.";
    } else {
        $mensaje = "Error al actualizar los datos: " . $conexion->error;
    }
}


$sql = "SELECT * FROM usuarios WHERE id = '$id_usuario'";
$resultado = $conexion->query($sql);
$usuario = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perfil.css">
    <title>Prado - Perfil</title>
</head>

<body>
    <header class="encabezado">
        <div class="nave">
            <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            <h1>Prado</h1> 
        </div>

        <div class="nave1">
            <a href="index.php">Inicio</a>
            <a href="turnos.php">Reservas</a>
            <a href="redes.php">Contactos</a>
        </div>
    </header>

    <main class="contenedor-perfil">
        <div class="tarjeta-perfil">
            <h2>Información Personal</h2>
            
            <?php if (!empty($mensaje)): ?>
                <p style="color: green; text-align: center;"><?php echo $mensaje; ?></p>
            <?php endif; ?>

            <form class="form-perfil" action="perfil.php" method="POST">
                <div class="grupo-form">
                    <label for="nombre">Nombre y apellido:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>" class="campo-form" required>
                </div>

                <div class="grupo-form">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" value="<?php echo $usuario['correo']; ?>" class="campo-form" required>
                </div>

                <div class="grupo-form">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" value="<?php echo $usuario['contrasena']; ?>" class="campo-form" required>
                </div>

                <button type="submit" class="boton-guardar">Guardar cambios</button>
            </form>
        </div>
    </main>

    <footer>
        <a href="ayuda.php">Ayuda</a>
        <a href="contacto.php">Contacto</a>
        <a href="redes.php">Redes sociales</a>
    </footer>
</body>
</html>