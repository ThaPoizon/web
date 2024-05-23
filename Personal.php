<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Personal</title>
    <!--<link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    -->
    <link rel="preload" href="css/styles2.css" as="style">
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="shortcut icon" href="imagenes/global.png">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

<body>
    <form action = "validar.php" method = "post">

        <header>
            <div class="logo">
                <img src="imagenes\logoHotel.png" alt="Logo">
            </div>
            <div class="nav-bg">
                <nav class="navegacion-principal">
                    <a href="index.html">Regresar a pagina principal</a>
                </nav>
            </div>
            
        </header>

        <div class="wrapper">
            <form action="">
                <h1>Login de Personal</h1>

                <div class="input-box">
                    <input type="text" name="user" placeholder="Usuario" required >
                    <i class='bx bx-user-circle'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="pass" placeholder="Contrasena" required >
                    <i class='bx bx-lock-alt'></i>
                </div>

                <!--
                <div class="remember-forgot">
                    <label><input type="checkbox"> Recordarme</label>
                    <a href="#"></a>
                </div>
                -->
                <button type="submit" class="btn">Entrar</button>

                <div class="register-link">
                    <p>Problemas? Contacta al administrador <a href="#">Contacta</a></p>
                </div>
                
            </form>
            
        </div>
        
    </form>
    
</body>
