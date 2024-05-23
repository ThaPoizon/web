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
            $this->Write(10, 'Reporte de Habitaciones');
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

        $pdf->SetY(70);
        $pdf->SetX(45);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFillColor(0, 255, 255);
        $pdf->Cell(20, 9, 'Identificador', 0, 0, 'C', 1);
        $pdf->Cell(59, 9, 'Tipo', 0, 0, 'C', 1);
        $pdf->Cell(17, 9, 'Precio', 0, 0, 'C', 1);
        $pdf->Cell(50, 9, 'Disponible', 0, 1, 'C', 1);
        
        include('database.php');
        require('database.php');

        $consulta = "SELECT * FROM habitaciones";
        $resultado = mysqli_query($conexion, $consulta);

        $pdf->SetTextColor(0,0,0);
        $pdf->SetFillColor(240, 245, 255);

        while($row = $resultado->fetch_assoc()){
            $pdf->SetX(45);
            $pdf->Cell(20, 9, $row['habitaciones_id'], 0, 0, 'C', 1);
            $pdf->Cell(59, 9, $row['habitaciones_tipo'], 0, 0, 'C', 1);
            $pdf->Cell(17, 9, $row['habitaciones_precio'], 0, 0, 'C', 1);
            $pdf->Cell(50, 9, $row['habitaciones_disponible'], 0, 1, 'C', 1);

        }

        $pdf->Output();

    
?>