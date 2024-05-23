<?php
    include('database.php');

    $id = $_POST['txtID'];
    $tipo = $_POST['txtTipo'];
    $precio = $_POST['txtPrecio'];
    $disponible = $_POST['txtDisponible'];

    mysqli_query($conexion, "UPDATE `habitaciones` SET `habitaciones_tipo` = '$tipo', `habitaciones_precio` = '$precio', `habitaciones_disponible` = '$disponible' WHERE `habitaciones_id` = '$id'") or die("Falla en la actualizacion");
    mysqli_close($conexion);
    header("Location:home.php");

?>