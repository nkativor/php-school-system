<?php
session_start();
$connection = mysqli_connect("localhost","root","","school");
if(isset($_POST['update_btn']))
{
  $id = $_POST['update-id'];
  $cname= $_POST['class-name'];
  $name = $_POST['name'];
  $csection= $_POST['class-section'];

  $query = "UPDATE `class` SET `class-name`='$cname',`name`='$name',`class-section`='$csection' WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
         $_SESSION['success'] = "values updated";
         header('location: class.php');
}
else{
       $_SESSION['status'] = "values not updated";
       header('location: class.php');
}

}
?>
