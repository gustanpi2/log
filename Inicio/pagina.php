<?php
session_start();

// Verifica si el usuario ha iniciado sesión //
if (!isset($_SESSION['nombre'])) {
    header("Location: sesion.php");
    exit();
}

// Obtén la información del usuario desde la sesión //
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$direccion = $_SESSION['direccion'];
$telefono = $_SESSION['telefono'];
$fecha = $_SESSION['fecha'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Usuario</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/G.png">
</head>
<body>
    
    <header>
        <h1>Bienvenido, <?php echo $nombre; ?></h1>
    </header>

    <section class="informacion-usuario">
        <h2>Información Personal</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Dirección:</strong> <?php echo $direccion; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
        <p><strong>Fecha de Registro:</strong> <?php echo $fecha; ?></p>
    </section>


    <form method="post" action="cerrar.php">
        <button type="submit" name="cerrar_sesion">Cerrar Sesión</button>
    </form>

    <footer>
        <p><b>@Gustavo</b></p>
    </footer>
</body>
</html>