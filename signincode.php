<?php
include("include/connection.php");
session_start();
if(isset($_POST['login_btn']));
{
    $name= $_POST['name'];
    $password= $_POST['password'];
    $connection = mysqli_connect("localhost","root","","school");
    $query = "SELECT *FROM admin WHERE name='$name' AND password='$password'";
    $query_run = mysqli_query($connection,$query);
    if (mysqli_num_rows($query_run)>0) {
      if($row=mysqli_fetch_assoc($query_run)) {
        $_SESSION['username'] = $name;
        header('location: dashboard.php');

      }
    }else {
      echo "<div>Invalid name or password</div>";
    }
  }


 ?>
