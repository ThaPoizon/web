<?php
    include('database.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseñador Freelancer EVG</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="imagenes/global.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preload" href="css/styles3.css" as="style">
    <link rel="stylesheet" href="css/styles3.css">


</head>



<body>

    <header>
        <div class="logo">
            <img src="imagenes\logoHotel.png" alt="Logo">
        </div>
        <div class="nav-bg">
            <nav class="navegacion-principal">
                <a href="index.html">Regresar a pagina principal</a>
                <a href="#Contacto">Contacto</a>
            </nav>
        </div>
        
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal">
        <h1>Personal</h1>
        </nav>
    </div>


    <p></p>


    <div class = "espacio-tabla">
        <div class = "form-style-6">
            <h2>Editar datos de Habitaciones</h2>
        </div>
                <table class="table table-dark table-hover">
                    <thead>
                        
                    </thead>
                    <tbody>

                    <?php

                        $id = $_GET["id"];

                        $sql = "SELECT * from habitaciones WHERE habitaciones_id = '$id'";
                        $result = mysqli_query($conexion, $sql);

                        while($mostrar = mysqli_fetch_array($result)){

                    ?>

                        <form action = "procesar_editar.php" method = "POST">
                            <p></p>
                            <input type = "hidden" value = "<?php echo $mostrar['habitaciones_id']?>" name = "txtID">
                            <p>Tipo</p>
                            <input type = "text" value = "<?php echo $mostrar['habitaciones_tipo']?>" name = "txtTipo">
                            <p>Precio</p>
                            <input type = "text" value = "<?php echo $mostrar['habitaciones_precio']?>" name = "txtPrecio">
                            <p>Disponible</p>
                            <input type = "text" value = "<?php echo $mostrar['habitaciones_disponible']?>" name = "txtDisponible">
                        

                        <?php
                        }
                        ?>
                        <p></p>
                        <input type = "submit" value = "Actualizar">
                        </form>
                    </tbody>
                </table>

        </form>
    </div>    


</body>
