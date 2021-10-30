<?php
require('fpdf.php');
include("include/connection.php");
if(isset($_POST['exam_btn'])){
  $sql = "SELECT *FROM `examtb`";
  $records = mysqli_query($connection,$sql)or die( mysqli_error($connection));;

  $pdf = new FPDF();
  $pdf ->AddPage();
  $pdf ->SetFont('Arial','B',10);
  $pdf ->Cell(0,10,'Exam Timetable',0,1,'C');
  $pdf ->Cell(40,10,'EXAM NAME',1,0,'C');
  $pdf ->Cell(30,10,'TERM',1,0,'C');
  $pdf ->Cell(30,10,'SESSION',1,0,'C');
  $pdf ->Cell(30,10,'SUBJECT',1,0,'C');
  $pdf ->Cell(30,10,'CLASS',1,0,'C');
  $pdf ->Cell(30,10,'DATE',1,1,'C');
   while($row=mysqli_fetch_array($records))
   {
     $pdf ->Cell(40,10,$row['examname'],1,0,'C');
     $pdf ->Cell(30,10,$row['term'],1,0,'C');
     $pdf ->Cell(30,10,$row['session'],1,0,'C');
     $pdf ->Cell(30,10,$row['subject'],1,0,'C');
     $pdf ->Cell(30,10,$row['class'],1,0,'C');
     $pdf ->Cell(30,10,$row['date'],1,1,'C');
   }
  $pdf ->output();

}
 ?>
