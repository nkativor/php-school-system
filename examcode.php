<?php
session_start();
include("include/connection.php");
if(isset($_POST['submit_btn'])){

  $examname= $_POST['name'];
  $session = $_POST['session'];
  $class= $_POST['class'];
  $date= $_POST['date'];
  $subject= $_POST['subject'];
  $term= $_POST['term'];

  $query = "INSERT INTO `examtb` ( `examname`, `session`, `class`, `date`, `subject`, `term`) VALUES
  ('$examname','$session','$class','$date','$subject','$term')";
  $query_run = mysqli_query($connection,$query);
  if($query_run ){
    $_SESSION['success'] = "Values added";
    header('location: exam.php');
  }else{
    $_SESSION['status'] = "Values not added";
    header('location: dashboard.php');
  }


}

   ?>
