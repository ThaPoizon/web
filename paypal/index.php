<?php 
include('header.php');
include('config.php');

include('../database.php');

//Datos de la reserva, vienen de registro_reserva1.php
//MODIFICACION AHORA LOSPUSE EN EL SCRIPT,TONS VIENEN DEL dias.js

$fk_cliente = isset($_GET['fkClientes']) ? intval($_GET['fkClientes']) : 0;
$fk_habitaciones = isset($_GET['fkHabitaciones']) ? intval($_GET['fkHabitaciones']) : 0;

$f_entrada = isset($_GET['fentrada']) ? $_GET['fentrada'] : '';
$f_salida = isset($_GET['fsalida']) ? $_GET['fsalida'] : '';

$estado = isset($_GET['estado']) ? $_GET['estado'] : '';

$adultos = isset($_GET['numadultos']) ? intval($_GET['numadultos']) : 0;
$infantes = isset($_GET['numinfantes']) ? intval($_GET['numinfantes']) : 0;


//Dato de doferencia de dias, viene del hotel1.php
$diferenciaDias = isset($_GET['diferenciaDias']) ? intval($_GET['diferenciaDias']) : 0;

if($fk_habitaciones == '1'){
    $productPrice = 9999.09;
}else if($fk_habitaciones == '2'){
    $productPrice = 5000.99;
}else{
    $productPrice = 2333.22;
}

$productName = "Reservacion Hotel";
$currency = "MXN";

$productId = 123456;
$orderNumber = 546;

$precioTotal = $productPrice * $diferenciaDias;
?>

<title>Paypal PHP integración con ejemplo completo</title>
<?php include('contenedor.php');?>

<script src="js/calculoDiferencia.js" defer></script>

<div class="container">
	<h2>Pago de reservacion</h2>	
	<br>
	<table class="table">
	    <tr>
          
          <td style="width:150px">Precio por noche: $<?php echo $productPrice; ?></td>
          <td style="width:150px">Diferencia de dias: <?php echo $diferenciaDias; ?></td>
          <td style="width:150px">Total a pagar: $<?php echo $precioTotal;?></td>

          <td style="width:150px">ID de Cliente: <?php echo $fk_cliente;?></td>
          <td style="width:150px">ID de Habitacion: <?php echo $fk_habitaciones;?></td>

          <td style="width:150px">Estado: <?php echo $estado;?></td>

          <td style="width:150px">Adultos: <?php echo $adultos;?></td>
          <td style="width:150px">Infantes: <?php echo $infantes;?></td>

          <td style="width:150px">Fecha de Entrada: <?php echo $f_entrada;?></td>
          <td style="width:150px">Fecha de Salida: <?php echo $f_salida;?></td>
          
         

        </tr>
    </table>	

</div>

<td style="width:150px">
          <?php include 'paypalCheckout.php'; ?>
          </td>

<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="../recibo.php?f_entrada=<?php echo $f_entrada ?>&f_salida=<?php echo $f_salida ?>&productPrice=<?php echo $productPrice ?>&diferenciaDias=<?php echo $diferenciaDias ?>&precioTotal=<?php echo $precioTotal ?>&fk_cliente=<?php echo $fk_cliente ?>&fk_habitaciones=<?php echo $fk_habitaciones ?>&estado=<?php echo $estado ?>&adultos=<?php echo $adultos ?>&infantes=<?php echo $infantes ?>">Recibo</a>
        		
</div>

<?php include('footer.php');
    //Puro debugacion paadreeeee
    //echo "URL: " . $_SERVER['REQUEST_URI'] . "<br>";
?>
