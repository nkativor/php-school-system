<?php
session_start();
$connection = mysqli_connect("localhost","root","","school");
if(isset($_POST['delete_btn']))
{
  $id = $_POST['delete_id'];

  $query = "DELETE FROM `examtb` WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
         $_SESSION['success'] = "Your data is deleted";
         header('location: exam.php');
}
else{
       $_SESSION['status'] = "Your data is not deleted";
       header('location: exam.php');
}

}
?>
