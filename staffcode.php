<?php
session_start();
$connection=mysqli_connect("localhost","root","","school");
if(isset($_POST['staff_btn'])){

  $name= $_POST['name'];
  $email= $_POST['email'];
  $password = $_POST['password'];
  $address= $_POST['address'];
  $phonenumber= $_POST['phone-number'];
  $qualification = $_POST['qualification'];
  $salary= $_POST['salary'];

  $query = "INSERT INTO `staff`(`name`,`email`,`password`,`qualification`,`salary`,`address`,`phonenumber`)
  VALUES('$name','$email','$password','$qualification','$salary','$address','$phonenumber')";
  $query_run = mysqli_query($connection,$query);
  if($query_run ){
    $_SESSION['success'] = "staff added";
    header('location: search.php');
  }else{
    $_SESSION['status'] = "Values not added";
    header('location: staff.php');
  }


}

 ?>
