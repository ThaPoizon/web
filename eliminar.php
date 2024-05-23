<?php
    include('database.php');

    $ID = $_POST['txtID'];
    mysqli_query($conexion, "DELETE FROM habitaciones WHERE habitaciones_id = '$ID'") or die("Error al eliminar");
    mysqli_close($conexion);
    header("location:home.php")
?>