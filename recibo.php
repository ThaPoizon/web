<?php
    require('pdf/fpdf.php');

    class PDF extends FPDF{

        //Cabecera de pagina

        function Header(){
            //Logo
            $this->Cell(-200);
            $this->Image('imagenes/logoHotel.png', 0, -10, 70);
            //Letra
            $this->Ln(10);
            $this->SetFont('Arial' , 'B', 10);

            $this->Cell(-200);

            $this->SetX(150);
            $this->Write(10, 'Recibo de Reserva');
            $this->Ln();

        }

        function Footer(){
            //
            $this->SetFillColor(20, 05, 19);
            $this->Rect(0, 270, 220, 30, 'F');
            //Sube las letras
            $this->SetY(-20); 
            $this->SetFont('Arial' , '', 10);
            $this->SetTextColor(255, 255, 255);
            //Mueve las letras
            $this->SetX(20);
            $this->Write(5, 'Edmundo Viramontes Gtz');
            $this->Ln();

            $this->SetX(20);
            $this->Write(10, 'Programacion Web');
            $this->Ln();

            $this->SetX(20);
            $this->Write(3, 'Proyecto Unidad 2');
            $this->Ln();

        }
    }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 10);

        $f_entrada = $_GET['f_entrada'] ?? '';
        $f_salida = $_GET['f_salida'] ?? '';
        $productPrice = $_GET['productPrice'] ?? '';
        $diferenciaDias = $_GET['diferenciaDias'] ?? '';
        $precioTotal = $_GET['precioTotal'] ?? '';
        $fk_cliente = $_GET['fk_cliente'] ?? '';
        $fk_habitaciones = $_GET['fk_habitaciones'] ?? '';
        $estado = $_GET['estado'] ?? '';
        $adultos = $_GET['adultos'] ?? '';
        $infantes = $_GET['infantes'] ?? '';

        // Agregar los datos al PDF
        $pdf->Cell(10, 20, 'Fecha de Entrada: ' . $f_entrada);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'Fecha de Salida: ' . $f_salida);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'Precio por noche: $' . $productPrice);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'Dias de estadia: ' . $diferenciaDias);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'Total a pagar: $' . $precioTotal);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'ID de Cliente: ' . $fk_cliente);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'ID de Habitacion: ' . $fk_habitaciones);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'Estado: ' . $estado);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'Adultos: ' . $adultos);
        $pdf->Ln();
        $pdf->Cell(10, 20, 'Infantes: ' . $infantes);
        $pdf->Ln();

        $pdf->Output();

    
?>