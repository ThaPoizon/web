<?php
    include('database.php');
    session_start();
    $varsession = $_SESSION['user'];

    if($varsession == null || $varsession = ''){
        header("location:Personal.php");
        die();
    }
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
                <a href="cerrar_sesion.php">Cerrar sesion</a>
            </nav>
        </div>
        
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal">
        <h1>Personal</h1>
        </nav>
    </div>

    <p></p>

    <div class="nav-bg">
            <nav class="navegacion-principal">
                <a href="#registro">Registrar</a>
                <a href="#Editar">Editar y Consultar</a>
            </nav>
    </div>

    <p></p>

    <div class = "form-style-6">
        <form action = "registro_hab.php" method = "POST">

        <h1>Registro de Habitaciones:</h1>
            
            <label for = "id"> Habitacion ID </label>
            <input type = "text" name = "habitaciones_id">
                    
            <label for = "tipo"> Habitacion Tipo </label>
            <input type = "text" name = "habitaciones_tipo">
                   
            <label for = "precio"> Habitacion Precio </label>
            <input type = "text" name = "habitaciones_precio">
                    
            <label for=  "displonible"> Habitacion Disponible </label>
            <input type = "text" name = "habitaciones_disponible" >
                    
        <button type="submit" class="form-style-6" value="Send">Registrar</button>
                
    </div>

    <div class="nav-bg">
        <nav class="navegacion-principal">
        <h1></h1>
        </nav>
    </div>

    <div class = "espacio-tabla">
        <div class = "form-style-6">
            <h2>Editar y Consultar Habitaciones</h2>
        </div>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Habitacion ID</th>
                        <th scope="col">Habitacion Tipo</th>
                        <th scope="col">Habitacion Precio</th>
                        <th scope="col">Habitacion Disponible</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $sql = "SELECT * from habitaciones";
                        $result = mysqli_query($conexion, $sql);

                        while($mostrar = mysqli_fetch_array($result)){

                    ?>

                        <tr>
                            <td> <?php echo $mostrar['habitaciones_id']?> </td>
                            <td> <?php echo $mostrar['habitaciones_tipo']?> </td>
                            <td> <?php echo $mostrar['habitaciones_precio']?> </td>
                            <td> <?php echo $mostrar['habitaciones_disponible']?> </td>
                            <td> 
                                <!--Editar-->
                                <a class = "btn btn-success" href = "editar.php?id=<?php echo $mostrar['habitaciones_id']?>">Editar</a>

                                <!--Eliminar-->
                                <form action ="eliminar.php" method = "POST">
                                    <input type = "hidden" value = "<?php echo $mostrar['habitaciones_id']?> " name = "txtID" readonly>
                                    <td> <input class = "btn btn-danger" type = "submit" value = "Eliminar" name = "btnElminar"> </td> 
                                </form>
                        </td>

                        </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            <div class = "reporter">
                <a class = "btn btn-warning" href = "reportes.php">Imprimir Reportes</a>
            </div>
                        
    </div>    


</body>

