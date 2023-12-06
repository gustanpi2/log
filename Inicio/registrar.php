<?php
include("conexion.php");

if (isset($_POST['registrar'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $direction = trim($_POST['direction']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);
        $fecha = date("d/m/y");

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $consulta = "INSERT INTO datos(nombre,email,direccion,telefono,contraseña, fecha)
                VALUES('$name','$email','$direction','$phone','$hashed_password','$fecha')";

        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            header("Location: pagina.php");
            exit();
        } else {
            ?>
            <h3 class="error"> Ocurrió un error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error"> Hay campos vacíos</h3>
        <?php
    }
}
?>