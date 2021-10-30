<?php
session_start();
$connection = mysqli_connect("localhost","root","","school");
if(isset($_POST['update_btn']))
{
    $item= $_POST['item'];
    $quantity = $_POST['quantity'];
    $amount= $_POST['amount'];
    $purchasedb= $_POST['purchasedb'];
    $purchasedf= $_POST['purchasedf'];
    $date= $_POST['date'];
    $id = $_POST['update'];

  $query = "UPDATE expenditure SET item = '$item', quantity= '$quantity', amount = '$amount', purchasedb = '$purchasedb',
   purchasedf = '$purchasedf',`date` = '$date' WHERE id = '$id'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
         $_SESSION['success'] = "values updated";
         header('location: expenditure.php');
}
else{
       $_SESSION['status'] = "values not updated";
       header('location: edit-expenditure.php');
}

}
?>
