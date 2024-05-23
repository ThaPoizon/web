<?php
  include('database.php');

  $query = "SELECT clientes_id FROM clientes";

  $result = $conexion->query($query);

  $query2 = "SELECT habitaciones_id FROM habitaciones";

  $result2 = $conexion->query($query2);
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

  <!-- Abandonamos el script ya que la funcionalida de este choca con registro.reserva y este puede ser suplantado poniendo su funcionalidad este.
    <script src="js/dias.js" defer></script>
  -->
    <style>
   .container {
    display: flex;
    align-items: flex-start; /* Alinea los elementos al principio del contenedor */
    padding: 20px;
  }

  .container img {
    width: 1070px; /* Ajusta el tamaño de la imagen aquí */
    height: auto;
    margin-right: 20px;
  }

  .form-container ul {
    list-style: none;
    padding: 0;
    margin: 0; /* Añadido para eliminar el margen predeterminado de la lista */
  }

  .form-container li {
    margin-bottom: 10px;
  }

  .form-container input,
  .form-container select,
  .form-container button {
    width: 300px;
    height: 40px;
    font-size: 16px;
    padding: 5px;
  }
</style>

</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <h1>Reservacion</h1>
        </nav>
    </div>

    
    <div class="container">
        <img src="imagenes/hotel1.jpg" alt="Imagen" name = "ImaHabitacion">
        <div class="form-container">
          <form id = "reservaForm" action="registro_reserva1.php" method="POST">
            <ul>
              <h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus repudiandae culpa tenets<br>
                Consectetur adipisicing elit. Ipsum dolor sit amet Ducimus repudiandae culpa tenetur, o dit<br>
                Sit amet consectetur adipisicing elit. Ducimus repudiandae culpa tenetur, o dit ipsum dolor<br>
                Amet consectetur adipisicing elit. Ducimus repudiandae culpa tenetur, o dit ipsum dolor sit<br>
                Adipisicing elit. Ducimus repudiandae culpa tenetur, o dit ipsum dolor sit amet consectetur<br> 
                Ducimus repudiandae culpa tenetur, o dit ipsum dolor sit amet consectetur adipisicing elit.<br> 
                Ipsum dolor sit amet consectetur adipisicing elit. Ducimus repudiandae culpa tenetur, o dit<br> 
                Dolor sit amet consectetur adipisicing elit. Ducimus repudiandae culpa tenetur, o dit ipsum<br> 
                Ducimus repudiandae culpa tenetur, o dit ipsum dolor sit amet consectetur adipisicing elits<br> 
                Sit amet consectetur adipisicing elit. Ducimus repudiandae culpa tenetur, o dit ipsum dolor<br> 
                Consectetur adipisicing elit. Ducimus repudiandae culpa tenetur, o dit ipsum dolor sit amet<br> 
                Ducimus repudiandae culpa tenetur, o dit ipsum dolor sit amet consectetur adipisicing elits<br> 
                Repudiandae culpa tenetur, o dit ipsum dolor sit amet consectetur adipisicing elit. Ducimus<br>     
              </h2>
              <li>
              <select name="seleccionaFK_Habitacion" id = "fkHabitacion">
                    <?php
                          // Check if the query was successful
                          if ($result) {
                              // Iterate through the result set to generate the options
                              while ($row = $result2->fetch_assoc()) {
                                  // Output an <option> element for each foreign key value
                                  echo "<option value='" . $row['habitaciones_id'] . "'>" . $row['habitaciones_id'] . "</option>";
                              }
                          } else {
                              // If the query fails, display an error message
                              echo "Error: " . $connection->error;
                          }
                    ?>
                  </select>ID Habitacion

              </li>
              <li>
                  <select name="seleccionaFK_CLiente" id = "fkCliente">
                    <?php
                          // Check if the query was successful
                          if ($result) {
                              // Iterate through the result set to generate the options
                              while ($row = $result->fetch_assoc()) {
                                  // Output an <option> element for each foreign key value
                                  echo "<option value='" . $row['clientes_id'] . "'>" . $row['clientes_id'] . "</option>";
                              }
                          } else {
                              // If the query fails, display an error message
                              echo "Error: " . $connection->error;
                          }
                    ?>
                  </select>ID Cliente
              </li>
              <li><input type="date" name = "f_entrada" id = "f_entrada"> Fecha de entrada</li>
              <li><input type="date" name = "f_salida" id = "f_salida"> Fecha de Salida</li>
              <li>
                <select name="estado" name = "estado" id = "Estado">
                  <option value="sencilla">Sencilla</option>
                  <option value="doble">Doble</option>
                </select> Estado
              </li>
              <li><input type="number" name = "adultos" max="4" min = "0" id = "Adultos">Num Adultos</li>
              <li><input type="number" name = "infantes" max="4" min = "0" id = "Infantes">Num Infantes</li>
              <li><button type="submit">Enviar</button></li>
            </ul>
          </form>
        </div>
    </div>
    

    <footer class="footer">
        <p>&copy; Todos los derechos reservados. EVG</p>
        
    </footer>
    <script src="js/fotocambio.js"></script>
</body>

</html>