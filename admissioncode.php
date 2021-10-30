<?php
session_start();
include("include/connection.php");
if(isset($_POST['admission_btn'])){

  $sid= $_POST['sid'];
  $sname = $_POST['sname'];
  $fname= $_POST['fname'];
  $mname= $_POST['mname'];
  $date= $_POST['date'];
  $gender= $_POST['gender'];
  $number= $_POST['number'];
  $email= $_POST['email'];
  $address= $_POST['address'];
  $class= $_POST['class'];
  $section= $_POST['section'];
  //uploading image//
  $image = $_FILES['image']['name'];
  $file_tmp =$_FILES['image']['tmp_name'];

        $query = "INSERT INTO `admission` ( `sid`, `sname`, `fname`, `mname`, `date`, `gender`,`number`,`email`,`address`,`class`,`section`,`image`)
         VALUES
        ('$sid','$sname','$fname','$mname','$date','$gender','$number','$email','$address','$class','$section','$image')";
        $query_run = mysqli_query($connection,$query);
        
        if($query_run ){
          move_uploaded_file($file_tmp,"uploads/".$image);
          $_SESSION['success'] = "values added";
          header('location: admissionlist.php');
        }else{
          $_SESSION['status'] = "values not added";
          header('location: admission.php');
        }




}


   ?>
