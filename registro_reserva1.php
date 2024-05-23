<?php
include('database.php');

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $cliente_id = $_POST['seleccionaFK_CLiente'];
    $habitacion_id = $_POST['seleccionaFK_Habitacion'];
    $fecha_entrada = $_POST['f_entrada'];
    $fecha_salida = $_POST['f_salida'];
    $estado = $_POST['estado'];
    $adultos = $_POST['adultos'];
    $infantes = $_POST['infantes'];

     // Calcular la diferencia de días
     $fechaEntrada = new DateTime($fecha_entrada);
     $fechaSalida = new DateTime($fecha_salida);
     $diferencia = $fechaSalida->diff($fechaEntrada);
     $diferenciaDias = $diferencia->days;

    // Prepara la consulta SQL para insertar en la tabla reservas
    $query = "INSERT INTO reservas (fk_clientes_id, fk_habitaciones_id, reservas_f_entrada, reservas_f_salida, reservas_estado, reservas_adultos, reservas_infantes) 
              VALUES ('$cliente_id', '$habitacion_id', '$fecha_entrada', '$fecha_salida', '$estado', '$adultos', '$infantes')";

    // Ejecuta la consulta y verifica si fue exitosa
    if ($conexion->query($query) === TRUE) {
        // Redirecciona al usuario a la página de PayPal
        header("location:paypal/index.php?diferenciaDias=$diferenciaDias&fkHabitaciones=$habitacion_id&fkClientes=$cliente_id&fentrada=$fecha_entrada&fsalida=$fecha_salida&numadultos=$adultos&numinfantes=$infantes&estado=$estado");
        exit();
    } else {
        echo "Error al realizar la reserva: " . $conexion->error;
    }
} else {
    // Si no se ha enviado el formulario, redirige al formulario de reserva
    header("Location: hotel1.php");
    exit();
}
?>