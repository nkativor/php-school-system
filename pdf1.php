<?php
require('fpdf.php');
include("include/connection.php");
if(isset($_POST['tb_btn'])){
  $sql = "SELECT *FROM `timetable`";
  $records = mysqli_query($connection,$sql)or die( mysqli_error($connection));;

  $pdf = new FPDF();
  $pdf ->AddPage();
  $pdf ->SetFont('Arial','B',10);
  $pdf ->Cell(0,10,'Class Timetable',0,1,'C');
  $pdf ->Cell(40,10,'CLASS',1,0,'C');
  $pdf ->Cell(40,10,'SUBJECT',1,0,'C');
  $pdf ->Cell(40,10,'TEACHER',1,0,'C');
  $pdf ->Cell(40,10,'TIME',1,0,'C');
  $pdf ->Cell(40,10,'DAY',1,0,'C');

   while($row=mysqli_fetch_array($records))
   {
     $pdf ->Cell(40,10,$row['classname'],1,0,'C');
     $pdf ->Cell(40,10,$row['subject'],1,0,'C');
     $pdf ->Cell(40,10,$row['teacher'],1,0,'C');
     $pdf ->Cell(40,10,$row['subject'],1,0,'C');
     $pdf ->Cell(40,10,$row['time'],1,0,'C');
     $pdf ->Cell(40,10,$row['day'],1,1,'C');
   }
  $pdf ->output();

}
 ?>
