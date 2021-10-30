<?php
require('fpdf.php');
include("include/connection.php");
if(isset($_POST['pdf_btn'])){
  $sql = "SELECT *FROM `expenditure`";
  $records = mysqli_query($connection,$sql)or die( mysqli_error($connection));;

  $pdf = new FPDF();
  $pdf ->AddPage();
  $pdf ->SetFont('Arial','B',10);
  $pdf ->Cell(0,10,'Expenditure List',0,1,'C');
  $pdf ->Cell(40,10,'ITEM',1,0,'C');
  $pdf ->Cell(30,10,'QUANTITY',1,0,'C');
  $pdf ->Cell(30,10,'AMOUNT',1,0,'C');
  $pdf ->Cell(30,10,'PURCHASEDBY#',1,0,'C');
  $pdf ->Cell(40,10,'PURCHASEDFROM#',1,0,'C');
  $pdf ->Cell(30,10,'DATE',1,1,'C');
   while($row=mysqli_fetch_array($records))
   {
     $pdf ->Cell(40,10,$row['item'],1,0,'C');
     $pdf ->Cell(30,10,$row['quantity'],1,0,'C');
     $pdf ->Cell(30,10,$row['amount'],1,0,'C');
     $pdf ->Cell(30,10,$row['purchasedb'],1,0,'C');
     $pdf ->Cell(40,10,$row['purchasedf'],1,0,'C');
     $pdf ->Cell(30,10,$row['date'],1,1,'C');
   }
  $pdf ->output();

}
 ?>