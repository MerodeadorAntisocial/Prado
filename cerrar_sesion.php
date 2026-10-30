<?php
session_start();
session_destroy();
header("Location: iniciar.php");
exit();
?>