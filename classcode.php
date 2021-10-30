<?php
session_start();
$connection=mysqli_connect("localhost","root","","school");
if(isset($_POST['submit_btn'])){

  $name= $_POST['student-name'];
  $cname = $_POST['class-name'];
  $csection= $_POST['class-section'];

  $query = "INSERT INTO `class`(`name`,`class-name`,`class-section`)VALUES('$name','$cname','$csection')";
  $query_run = mysqli_query($connection,$query);
  if($query_run ){
    $_SESSION['success'] = "Values added";
    header('location: class.php');
  }else{
    $_SESSION['status'] = "Values not added";
    header('location: class.php');
  }


}

 ?>
