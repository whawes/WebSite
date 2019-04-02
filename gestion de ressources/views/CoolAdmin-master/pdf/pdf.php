

  <?php
  require('fpdf.php');
  require('htmlpdf.php');

  
  $front_finish_name_field = $_POST["data"];
  $pdf = new PDF_HTML();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',16);
  $pdf->WriteHTML($front_finish_name_field);
  $pdf->Output(F,'filename.pdf');

 
  ?>