<?php
session_start();
$connection = mysqli_connect("localhost","root","","school");
if(isset($_POST['delete_btn']))
{
  $id = $_POST['delete_id'];

  $query = "DELETE FROM `subject` WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
         $_SESSION['success'] = "Your subject is deleted";
         header('location: subject.php');
}
else{
       $_SESSION['status'] = "Your subject is not deleted";
       header('location: subject.php');
}

}
?>
