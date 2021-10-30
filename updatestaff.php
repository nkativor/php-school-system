<?php
session_start();
$connection = mysqli_connect("localhost","root","","school");
if(isset($_POST['submit_btn']))
{
  $id = $_POST['update-staff'];
  $name= $_POST['name'];
  $email= $_POST['email'];
  $password = $_POST['password'];
  $address= $_POST['address'];
  $phonenumber= $_POST['phone-number'];
  $qualification = $_POST['qualification'];
  $salary= $_POST['salary'];

  $query = "UPDATE `staff` SET `name`='$name',`email`='$email',`password`='$password',
  `qualification`= '$qualification',`salary`='$salary',`address`='$address',`phonenumber`='$phonenumber'
     WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
         $_SESSION['success'] = "values updated";
         header('location: search.php');
}
else{
       $_SESSION['status'] = "values not updated";
       header('location: editstaff.php');
}

}
?>
