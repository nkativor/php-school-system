<?php
session_start();
$connection = mysqli_connect("localhost","root","","school");
if(isset($_POST['update_btn']))
{
  $name= $_POST['edit-name'];
  $ssnit = $_POST['edit-ssnit'];
  $number= $_POST['edit-number'];
  $bank= $_POST['edit-bank'];
  $salary= $_POST['edit-salary'];
  $position= $_POST['edit-position'];
  $date= $_POST['edit-date'];
  $id = $_POST['update-payroll'];

  $query = "UPDATE payroll SET name ='$name',ssnit='$ssnit',number='$number',
  bank= '$bank',salary='$salary',position='$position',date='$date' WHERE id='$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
         $_SESSION['success'] = "values updated";
         header('location: payroll.php');
}
else{
       $_SESSION['status'] = "values not updated";
       header('location: editpayroll.php');
}

}
?>
