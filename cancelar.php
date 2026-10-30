<?php
session_start();
include('conexion.php');


if (!isset($_SESSION['usuario_id'])) {
    header("Location: iniciar.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];


$sql = "SELECT * FROM reservas WHERE usuario_id = '$usuario_id' ORDER BY id DESC LIMIT 1";
$resultado = $conexion->query($sql);
$reserva = $resultado ? $resultado->fetch_assoc() : null;

// Cancelar el turno si se presiona el botón
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelar_id'])) {
    $reserva_id = $_POST['cancelar_id'];
    
    // Eliminar la reserva
    $sql_delete = "DELETE FROM reservas WHERE id = '$reserva_id' AND usuario_id = '$usuario_id'";
    if ($conexion->query($sql_delete) === TRUE) {
        header("Location: cancelado.php");
        exit();
    } else {
        $error = "Error al cancelar el turno: " . $conexion->error;
    }
}
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
    
    <main>
        <?php if ($reserva): ?>
            <div class="cancelar">
                <h3><?php echo $reserva['cancha']; ?></h3>
                <div class="texto">
                    <p>FECHA: <?php echo $reserva['fecha']; ?></p>
                    <p>HORARIO: <?php echo $reserva['horario']; ?></p>
                    <p>TOTAL: $<?php echo number_format($reserva['total'], 0, ',', '.'); ?></p>
                </div>

                <form action="cancelar.php" method="POST">
                    <input type="hidden" name="cancelar_id" value="<?php echo $reserva['id']; ?>">
                    <button type="submit" style="background:none; border:none; width:100%; cursor:pointer;">
                        <h4 style="background-color:#A53F3F; color:white; border-radius:25px; font-size:20px; text-align:center; padding:10px;">Cancelar turno</h4>
                    </button>
                </form>
            </div>
        <?php else: ?>
            <div class="cancelar">
                <h3>Sin turnos activos</h3>
                <div class="texto">
                    <p>No posees reservas registradas actualmente.</p>
                </div>
            </div>
        <?php endif; ?>

        <div class="info">
            <div class="texto">
                <p>IMPORTANTE: </p>
                <p>La cancelación estará sujeta a los términos y condiciones.</p>
            </div>
        </div>
    </main>

    <footer class="footer">
        <a href="contacto.php">Contacto</a>
        <a href="redes.php">Redes Sociales</a>
        <a href="ayuda.php">Ayuda</a>
        <a href="terminos.php">Términos y Condiciones</a>
    </footer>
</body>
</html>