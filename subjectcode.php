<?php
session_start();
$connection=mysqli_connect("localhost","root","","school");
if(isset($_POST['sub_btn'])){

  $id= $_POST['sub_id'];
  $sname = $_POST['subject_name'];


  $query = "INSERT INTO `subject` (`id`, `subject-name`)VALUES('$id','$sname')";
  $query_run = mysqli_query($connection,$query);
  if($query_run ){
    $_SESSION['success'] = "subject added";
    header('location: subject.php');
  }else{
    $_SESSION['status'] = "subject not added";
    header('location: subject.php');
  }


}

 ?>
