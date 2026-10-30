<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prado - Redes sociales</title>
    <link rel="stylesheet" href="rstyles.css">
</head>
<body>
    <header>
        <div class="logo-title">
            <div class="logo">
                <a href="index.php"><img src="imagenes/logo.png" alt="Logotipo"></a>
            </div>
            <h1>Prado</h1>
        </div>
        <nav>
            <a href="index.php" class="nav-link">Inicio</a>
            <div class="user-icon">
                <a href="perfil.php"><img src="imagenes/usuario.png" alt="Perfil"></a>
            </div>
        </nav>
    </header>

    <main>
        <div class="banner-container">
            <div class="banner">
                <h2>Redes sociales</h2>
            </div>
        </div>

        <div class="redes">
            <a href="#" target="_blank">Facebook</a>
            <a href="https://www.instagram.com/canchasprado?dlrf=bmgwemExMTN6Ymh4" target="_blank">Instagram</a>
            <a href="https://pin.it/1KBKdx9vn" target="_blank">Pinterest</a>
        </div>
    </main>

    <footer>
        <a href="ayuda.php">Ayuda</a>
        <a href="contacto.php">Contacto</a>
        <a href="terminos.php">Términos y condiciones</a>
    </footer>
</body>
</html>