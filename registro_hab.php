<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('database.php');

    $id = $_POST['habitaciones_id'];
    $tipo = $_POST['habitaciones_tipo'];
    $precio = $_POST['habitaciones_precio'];
    $disponible = $_POST['habitaciones_disponible'];

    $consulta = "INSERT INTO `habitaciones`(`habitaciones_id`, `habitaciones_tipo`, `habitaciones_precio`, `habitaciones_disponible`) VALUES ('$id','$tipo','$precio','$disponible')";

    $resultado = mysqli_query($conexion, $consulta) or die("error de registro");

    mysqli_close($conexion);
    header("location:home.php");
    ?>

