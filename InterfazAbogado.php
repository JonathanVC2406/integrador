<?php
require_once 'model/Usuario.php';
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'abogado') {
    header('Location: login.php');
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Interfaz del Abogado</title>
    <!-- Agrega aquí tus enlaces a CSS y otros recursos -->
</head>
<body>
    <h1>Bienvenido, <?php echo $usuario->getNombre(); ?></h1>
    <!-- Contenido específico del abogado -->
</body>
</html>