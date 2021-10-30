<?php
session_start();
$connection = mysqli_connect("localhost","root","","school");
if(isset($_POST['delete_staff']))
{
  $id = $_POST['d_id'];

  $query = "DELETE FROM `staff` WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
       $_SESSION['status'] = "Your data is deleted";
         header('location: search.php');
}
else{
       $_SESSION['status'] = "Your data is not deleted";
       header('location: search.php');
}

}
?>
