<?php
session_start();
include('conexion.php');


if (!isset($_SESSION['usuario_id']) || !isset($_SESSION['reserva'])) {
    header("Location: iniciar.php");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];
$cancha     = $_SESSION['reserva']['cancha'];
$fecha      = $_SESSION['reserva']['fecha'];
$horario    = $_SESSION['reserva']['horario'];
$total      = $_SESSION['reserva']['precio'];
$metodo     = $_GET['metodo'] ?? 'Efectivo';


$stmt_reserva = $conexion->prepare("INSERT INTO reservas (usuario_id, cancha, fecha, horario, total) VALUES (?, ?, ?, ?, ?)");
$stmt_reserva->bind_param("isssd", $id_usuario, $cancha, $fecha, $horario, $total);

if ($stmt_reserva->execute()) {
    $id_reserva = $conexion->insert_id;

   
    $estado = ($metodo === 'Efectivo') ? 'Pendiente' : 'Aprobado';
    $stmt_pago = $conexion->prepare("INSERT INTO pagos (reserva_id, metodo_pago, monto, estado) VALUES (?, ?, ?, ?)");
    $stmt_pago->bind_param("isds", $id_reserva, $metodo, $total, $estado);
    $stmt_pago->execute();

    $_SESSION['reserva_confirmada'] = $_SESSION['reserva'];
    unset($_SESSION['reserva']);

    // Metodos de pago
    if ($metodo === 'Billetera Virtual') {
        header("Location: virtual.php");
    } elseif ($metodo === 'Tarjeta') {
        header("Location: debito.php");
    } else {
        header("Location: efectivo.php");
    }
    exit();
} else {
    echo "Error al registrar la reserva: " . $conexion->error;
}
?>