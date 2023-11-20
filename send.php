<?php
include("conexion.php");

if (isset($_POST['send'])) {

    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO ingresa (nombre, email, telefono, fecha) 
    VALUES('$name', '$email', '$phone', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            <h3 class="success">recibimos tus datos</h3>
        <?php
        } else {
        ?>
            <h3 class="error">ocurrio un error</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="error">Ingresa todos los datos</h3>
<?php
    }
}

?>