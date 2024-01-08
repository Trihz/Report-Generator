<?php

    include("PDF/tcpdf.php");


    if(isset($_POST["generate_pdf"])){
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('Fiteklabs Finance Report');

        $pdf->SetMargins(10, 10, 10); // Set margins (left, top, right)

        $pdf->AddPage();

        // Title
        $pdf->SetFont('helvetica', 'B', 16);
        $pdf->Cell(0, 10, 'Weekly Finance Report', 0, 1, 'C');

        // Add Image
        $imagePath = 'logo_orange.png'; // Replace with the path to your image file
        $pdf->Image($imagePath, $x = 15, $y = 30, $w = 180, $h = 0, $type = '', $link = '', $align = '', $resize = false, $dpi = 300, $palign = '', $ismask = false, $imgmask = false, $border = 0, $fitbox = false, $hidden = false, $fitonpage = false);

        // Table Header
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->SetFillColor(255, 69, 0);
        $pdf->SetTextColor(255, 255, 255); 
        $pdf->Cell(40, 10, 'Name', 1, 0, 'C', 1);
        $pdf->Cell(30, 10, 'Start Date', 1, 0, 'C', 1);
        $pdf->Cell(30, 10, 'End Date', 1, 0, 'C', 1);
        $pdf->Cell(40, 10, 'Contribution (KES)', 1, 0, 'C', 1);
        $pdf->Cell(50, 10, 'Record Time', 1, 1, 'C', 1);

        // Footer (just below the table)
        $pdf->Ln(); // Add new line
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->Cell(0, 10, 'Prepared by Chief Financial Officer: Peter Muchendu', 0, 1, 'C');

        // Output PDF as a download
        ob_end_clean();
        $currentTime = date('F j, Y, g:i a');
        $pdf->Output('WeeklyFinance ('. $currentTime .').pdf', 'D');
    }

   

?>