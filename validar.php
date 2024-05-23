<?php

    $usuario = $_POST['user'];
    $password = $_POST['pass'];

    session_start();

    $_SESSION['user']=$usuario;

    include('database.php');

    $consulta = "SELECT*FROM personal where usuario = '$usuario' and clave = '$password'";

    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location:home.php");

    }else{
        ?>
        <?php
        include ("personal.php");
        ?>
        <script>alert("Error en la atentificacion")</script>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
       
