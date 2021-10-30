<?php
session_start();
$connection=mysqli_connect("localhost","root","","school");
if(isset($_POST['submit_btn'])){

  $item= $_POST['item'];
  $quantity = $_POST['quantity'];
  $amount= $_POST['amount'];
  $purchasedb= $_POST['purchasedb'];
  $purchasedf= $_POST['purchasedf'];
  $date= $_POST['date'];

  $query = "INSERT INTO `expenditure`(`item`,`quantity`,`amount`,`purchasedb`,`purchasedf`,`date`)
  VALUES('$item','$quantity','$amount','$purchasedb','$purchasedf','$date')";
  $query_run = mysqli_query($connection,$query);
  if($query_run ){
    $_SESSION['success'] = "Values added";
    header('location: expenditure.php');
  }else{
    $_SESSION['status'] = "Values not added";
    header('location: expenditure.php');
  }


}

 ?>
