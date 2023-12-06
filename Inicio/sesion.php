
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/G.png">

</head>
<body>
    <form method="post">
        <h2>Hola</h2>
        <p>Inicia sesión</p>

        <hr>
        <?php
        if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error'];
                ?>
            </p>
        <?php
        }
        ?>
        <hr>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="images/name.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="images/password.svg" alt="">
        </div>


        <input class="btn" type="submit" name="iniciar" value="Iniciar Sesión">
        <br>
        <a href="index.php" class="btn">Registrarse</a>
        
    </form>

    <?php 
        include("inicio1.php");
    ?>

    
</body>
</html>