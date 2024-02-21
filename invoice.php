<?php
include "userauthentication.php";

include "config/dbcon.php";

$query = "SELECT * FROM payment where user_id =" . $_SESSION["userid"];
$query_run = mysqli_query($con, $query);


require('fpd/fpdf.php');
if (mysqli_num_rows($query_run) > 0)
    while ($row = mysqli_fetch_assoc($query_run)) {
        // $id = $invoice_item->id;
        // $firstname = $invoice_item->firstname;
        // $email = $invoice_item->email;
        // $cardname = $invoice_item->cardname;
        // $cardnumber = $invoice_item->cardnumber;


        // New object created and constructor invoked
        $pdf = new FPDF();

        // Add new pages. By default no pages available.
        $pdf->AddPage();

        // Set font format and font-size
        $pdf->SetFont('Times', 'B', 20);

        // Framed rectangular area
        $pdf->Cell(176, 5, 'Khana Khazana Restaurant', 0, 0, 'C');

        // Set it new line
        $pdf->Ln();

        // Set font format and font-size
        $pdf->SetFont('Times', 'B', 12);

        $pdf->
            Cell(176, 5, 'Customer Invoice', 0, 0, 'C');

        $pdf->SetFont('Arial', 'B', 14);

        //Cell(width , height , text , border , end line , [align] )

        $pdf->Cell(59, 5, '', 0, 1); //end of line

        //set font to arial, regular, 12pt
        $pdf->SetFont('Arial', '', 12);

        $pdf->Cell(130, 5, 'Khana Khazana ', 0, 0);
        $pdf->Cell(59, 5, '', 0, 1); //end of line

        $pdf->Cell(130, 5, 'Surat, India, 395003', 0, 0);
        $pdf->Cell(59, 5, '', 0, 1);
        $pdf->Cell(130, 5, 'Phone [+4734494]', 0, 0);




        //make a dummy empty cell as a vertical spacer
        $pdf->Cell(189, 10, '', 0, 1); //end of line



        $pdf->SetFont('Arial', '', 12); // Set font and size
        $pdf->Cell(50, 10, 'Customer Name: ' . $row['firstname'], 0, 1);


        $pdf->SetFont('Arial', '', 12); // Set font and size
        $pdf->Cell(50, 10, 'Customer Email: ' . $row['email'], 0, 1);



        //make a dummy empty cell as a vertical spacer
        $pdf->Cell(189, 10, '', 0, 1); //end of line

        //invoice contents
        $pdf->SetFont('Arial', 'B', 12);

        $pdf->Cell(10, 8, 'id', 1, 0, 1);
        $pdf->Cell(25, 8, 'firstname', 1, 0, 1);
        $pdf->Cell(30, 8, 'cardname', 1, 0, 1);
        $pdf->Cell(44, 8, 'cardnumber', 1, 0, 1);
        $pdf->Cell(30, 8, 'TotalAmount', 1, 0, 1);
        $pdf->Cell(30, 8, 'Gst Amount', 1, 0, 1);
        $pdf->Cell(30, 8, 'Final Amount', 1, 1, 1);
        $pdf->SetFont('Arial', '', 12);

        //Numbers are right-aligned so we give 'R' after new line parameter

        $pdf->Cell(10, 5, $row['id'], 1, 0, 1);
        $pdf->Cell(25, 5, $row['firstname'], 1, 0, 1);
        $pdf->Cell(30, 5, $row['cardname'], 1, 0, 1);
        $pdf->Cell(44, 5, $row['cardnumber'], 1, 0, 1);
        $pdf->Cell(30, 5, $_SESSION['TotalAmount'], 1, 0, 1);
        $pdf->Cell(30, 5, $_SESSION['Gst Amount'], 1, 0, 1);
        $pdf->Cell(30, 5, $_SESSION['Final Amount'], 1, 0, 1);



        // Close document and sent to the browser
        $pdf->Output();
    }


?>