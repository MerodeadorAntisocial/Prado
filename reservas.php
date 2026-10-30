<?php
session_start();
include('conexion.php');

// Verificar 
if (!isset($_SESSION['usuario_id'])) {  
    header("Location: iniciar.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];

// Reservas ordenadas
$sql = "SELECT * FROM reservas WHERE usuario_id = '$usuario_id' ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prado - Mis Reservas</title>
    <link rel="stylesheet" href="reservas.css">
</head>
<body>
    <aside>
        <div>
            <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            <h1>Prado</h1>
        </div>
        <a href="perfil.php"><img src="imagenes/usuario.png" alt="Perfil" class="perfil"></a>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="turnos.php">Reserva</a>
            <a href="contacto.php">Contacto</a>
            <a href="redes.php">Redes</a>
            <a href="ayuda.php">Ayuda</a>
            <a href="terminos.php">Condiciones</a>
        </nav>
    </aside>

    <main>
        <header>
            <h2>Mis reservas</h2>
            <p>Acá podés ver y gestionar tus turnos.</p>
        </header>

        <section>
            <div>
                <h3>Tus Turnos Registrados</h3>
                <div class="cuerpo">
                    <?php if ($resultado && $resultado->num_rows > 0): ?>
                        <?php while ($reserva = $resultado->fetch_assoc()): ?>
                            <article class="proxima">
                                <div>
                                    <h4><?php echo date('d/m', strtotime($reserva['fecha'])); ?></h4>
                                </div>
                                <div>
                                    <p><?php echo htmlspecialchars($reserva['cancha']); ?></p>
                                    <p><?php echo htmlspecialchars($reserva['horario']); ?></p>
                                </div>
                                <div class="reservado">Confirmado</div>
                                <div class="precio">Total: $<?php echo number_format($reserva['total'], 0, ',', '.'); ?></div>
                            </article>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p style="padding: 15px; color: #ccc;">No tenés turnos registrados en este momento.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>