<?php

//ProPayPal es vital para declarar si es demo o prueba las transacciones

//define('ProPayPal', 0); // El cero simboliza entorno de Prueba
//define('ProPayPal', 1); // El 1 simboliza entorno de producción

define('ProPayPal', 0);
if(ProPayPal){
define("PayPalClientId", "AbfskKKg61PWwcCMwgVrClaRwyfM1-RyC-FdWtgXu6Dp_xVsw_UBbpZmpbbjBWZIO8IklYLw4CFM6sy6"); //EVG, mi wea de paypal para el btn pero no jala y no se porque
define("PayPalSecret", "EI71Ym2XYGZSgV-W2bMdfAZaCPHOHOQ4ri8AE1oRbrejfOU9wxWrSSJtNImWBBaFbxnySAdejdu3yfN6");   //EVG, mi wea de paypal para el btn pero no jala y no se porque
define("PayPalBaseUrl", "index.php");
define("PayPalENV", "sandbox");
} else {
    define("PayPalClientId", "AVACP5vOuQheKwTdBy_tlt2CY3g9CT4NAK3D8j3gEpMIpiO79WuRXaGi--I1ycXOhlaTfzXauydINNoS");
    define("PayPalSecret", "EMA6lVCQBJ20WMKOj93Z-M3t9cB5_sq0lV3AZgB0eu8pX2PKuFAsHus87bz3N6EdVyVmfyX1B3QqsEHG");
    define("PayPalBaseUrl", "https://demo.baulphp.com/paypal-php-integracion-con-ejemplo-completo/");
    define("PayPalENV", "sandbox");
    }
?>
