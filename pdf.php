<?php
require('fpdf.php');
include("include/connection.php");
if(isset($_POST['pdf_btn'])){
  $sql = "SELECT *FROM `payroll`";
  $records = mysqli_query($connection,$sql)or die( mysqli_error($connection));;

  $pdf = new FPDF();
  $pdf ->AddPage();
  $pdf ->SetFont('Arial','B',10);
  $pdf ->Cell(0,10,'Payslip List',0,1,'C');
  $pdf ->Cell(0,10,'Nollywood Film Production',0,1,'C');
  $pdf ->Cell(40,10,'Name',1,0,'C');
  $pdf ->Cell(30,10,'#SSNIT.NO',1,0,'C');
  $pdf ->Cell(30,10,'#ACCOUNT.NO',1,0,'C');
  $pdf ->Cell(30,10,'BANK',1,0,'C');
  $pdf ->Cell(30,10,'SALARY',1,0,'C');
  $pdf ->Cell(30,10,'DATE',1,1,'C');
   while($row=mysqli_fetch_array($records))
   {
     $pdf ->Cell(40,10,$row['name'],1,0,'C');
     $pdf ->Cell(30,10,$row['ssnit'],1,0,'C');
     $pdf ->Cell(30,10,$row['number'],1,0,'C');
     $pdf ->Cell(30,10,$row['bank'],1,0,'C');
     $pdf ->Cell(30,10,$row['salary'],1,0,'C');
     $pdf ->Cell(30,10,$row['date'],1,1,'C');
   }
  $pdf ->output();

}
?>
