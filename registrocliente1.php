<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('database.php');

    $nombre = $_POST['C_nombre'];
    $apellido = $_POST['C_apellido'];
    $correo = $_POST['C_correo'];
    $telefono = $_POST['C_telefono'];

    $consulta = "INSERT INTO `clientes`(`clientes_nombre`, `clientes_apellido`, `clientes_correo`, `clientes_telefono`) 
    VALUES ('$nombre','$apellido','$correo','$telefono')";

    $resultado = mysqli_query($conexion, $consulta) or die("error de registro");

    mysqli_close($conexion);
    header("location:hotel1.php");
    ?>