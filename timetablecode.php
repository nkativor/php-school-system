<?php
session_start();
$connection=mysqli_connect("localhost","root","","school");
if(isset($_POST['submit_btn'])){

  $classname= $_POST['classname'];
  $subject= $_POST['subject'];
  $teacher = $_POST['teacher'];
  $time= $_POST['time'];
  $day= $_POST['day'];

  $query = "INSERT INTO `timetable`(`classname`,`subject`,`teacher`,`time`,`day`)
  VALUES('$classname','$subject','$teacher','$time','$day')";
  $query_run = mysqli_query($connection,$query);
  if($query_run ){
    $_SESSION['success'] = "values added";
    header('location: timetable.php');
  }else{
    $_SESSION['status'] = "Values not added";
    header('location: timetable.php');
  }


}

 ?>
