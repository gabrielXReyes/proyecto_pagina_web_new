<?php
include("php/conexion.php");
$user = $_REQUEST['inicio1'];
$pass = $_REQUEST['inicio2'];

$link = conectar();
$consulta = "SELECT * FROM usuario WHERE `USER` = '$user'";
$consulta2 = mysqli_query($link, $consulta);
$dato = mysqli_num_rows($consulta2);

if ($dato == 0) {
    echo '<script>window.location.href = "http://localhost/proyecto/todomal.php";</script>';
} else {
    $fila = mysqli_fetch_assoc($consulta2); 

    if ($fila['USER'] == $user && password_verify($pass, $fila['PASS'])) {
        session_start();
        $_SESSION['user'] = $fila['USER'];
        $_SESSION['id'] = $fila['ID'];
        echo '<script>window.location.href = "http://localhost/proyecto/todobien.php";</script>';
    } else {
        echo '<script>window.location.href = "http://localhost/proyecto/todomal.php";</script>';
    }
}
mysqli_close($link);
?>
