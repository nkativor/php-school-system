<?php
session_start();
include("include/connection.php");
if(isset($_POST['payroll_btn'])){

  $staffname= $_POST['name'];
  $ssnit = $_POST['ssnit'];
  $number= $_POST['number'];
  $bank= $_POST['bank'];
  $salary= $_POST['salary'];
  $position= $_POST['position'];
  $date= $_POST['date'];
  
  $query = "INSERT INTO `payroll` ( `name`, `ssnit`, `number`, `bank`, `salary`, `position`,`date`) VALUES
  ('$staffname','$ssnit','$number','$bank','$salary','$position','$date')";
  $query_run = mysqli_query($connection,$query);
  if($query_run ){
    $_SESSION['success'] = "Values added";
    header('location: payroll.php');
  }else{
    $_SESSION['status'] = "Values not added";
    header('location: payroll.php');
  }


}

   ?>
