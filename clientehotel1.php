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

    <link rel="preload" href="css/styles4.css" as="style">
    <link rel="stylesheet" href="css/styles4.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
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

<section>
    <div class="wrapper">
            <form id = "formulario-registroC" action="registrocliente1.php" method = "POST">
                <h1>Llena tus datos para seguir con tu reserva de habitacion</h1>

                <div class="input-box">
                    <input type="text" id = "C_nombre" name="C_nombre" placeholder="Nombre"  >
                    <i class='bx bx-user-circle'></i>
                </div>

                <div class="input-box">
                    <input type="text" id = "C_apellido" name="C_apellido" placeholder="Apellido"  >
                    <i class='bx bx-user-circle'></i>
                </div>

                <div class="input-box">
                    <input type="text" id = "C_correo" name="C_correo" placeholder="Correo"  >
                    <i class='bx bx-user-circle'></i>
                </div>

                <div class="input-box">
                    <input type="text" id = "C_telefono" name="C_telefono" placeholder="Telefono"  >
                    <i class='bx bx-user-circle'></i>
                </div>

                <button type="submit" class="btn">Entrar</button>

                
            </form>
        </div>
</section>
<script src="js/validarclientes.js"></script>


    <div class="foot">
        Todos los derechos reservados. EVG
    </div>

</body>

</html>