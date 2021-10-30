<?php
include("include/header.php");
include("include/navbar.php");
include("include/date.php");
 ?>
<?php
if(!isset($_SESSION['username'])){
  header("location: signin.php");
}
 ?>
  <div class="container">
    <div class="col-md-2 card-header header-elements-inline mt-4 mr-8 ">
      <button type="button" name="button" class="btn btn-primary btn-xs form-control" data-toggle="modal" data-target="#studentaddmodal">
          Add Expenditure Data +
      </button>

    </div>
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add Expenditure</h5>
        <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
           <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
       <form action="expenditurecode.php" method="post">
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="inputEmail4">Item</label>
         <input type="text" class="form-control" name="item">
       </div>
       <div class="form-group col-md-6">
         <label for="inputPassword4">Quantity</label>
         <input type="text" class="form-control" name="quantity">
       </div>
     </div>
     <div class="form-group">
       <label for="inputAddress">Amount</label>
       <input type="text" class="form-control" name="amount" placeholder=" Amount">
     </div>
     <div class="form-group">
       <label for="inputAddress2">Purchased By</label>
       <input type="text" class="form-control" name="purchasedb">
     </div>
     <div class="row">
       <div class="form-group col-md-6">
         <label for="inputCity">Purchased From</label>
         <input type="text" class="form-control" name="purchasedf">
       </div>

       <div class="form-group col-md-4">
         <label for="inputState">Date</label>
         <input type="text" class="form-control" name="date" value="<?=$d;?>">
       </div
     </div>

     <button type="submit" class="btn btn-secondary" name="submit_btn">Add details</button>
     </form>
     </div>

      </div>

    </div>
  </div>


</div>
<div class="card my-5">
            <div class="card-header header-elements-inline mt-4">
                <h5 class="card-header text-center"> List Of All Expenditure</h5>
            </div>


            <table class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th class="text-center">ITEM</th>
                        <th class="text-center">QUANTITY.</th>
                        <th class="text-center">AMOUNT</th>
                        <th class="text-center">PURCHASED BY</th>
                        <th class="text-center">PURCHASED FROM:</th>
                        <th class="text-center">DATE</th>
                        <th class="text-center">EDIT</th>
                        <th class="text-center">DELETE</th>
                    </tr>
                </thead>
                <?php
                 include("include/connection.php");
                 $query = "SELECT *FROM `expenditure` ORDER BY item DESC";
                 $query_run= mysqli_query($connection,$query);

                 ?>
                <tbody>
                  <?php
                  $total = 0;
                   if (mysqli_num_rows($query_run)>0)
                    {
                    while( $row=mysqli_fetch_assoc($query_run)) {
                      $amount = $row['amount'];
                      $total+=$amount;
                     ?>

                     <tr>
                       <td> <?php echo $row['item']; ?></td>
                       <td> <?php echo $row['quantity']; ?></td>
                       <td> <?php echo $row['amount']; ?></td>
                       <td> <?php echo $row['purchasedb']; ?></td>
                       <td> <?php echo $row['purchasedf']; ?></td>
                       <td> <?php echo $row['date']; ?></td>
                       <td>
                          <form class="" action="" method="post">
                        <input type="hidden" name="edit" value=" <?php echo $row['id']; ?>">
                          <button type="button" name="edit_btn" class="btn btn-success"  data-toggle="modal" data-target="#studenteditmodal">Edit</button>
                        </form>
                         <td>
                         <form class="form-group" action="delete-expenditure.php" method="post">
                           <input type="hidden" name="delete_id" value=" <?php echo $row['id']; ?>">
                           <button type="submit" name="delete_btn" class="btn btn-danger">delete</button>
                         </form>

                       </td>


                     </tr>
                     <?php
                    }
  }

                  ?>

                </tbody>
            </table>
            <div class="mx-10">
                <h6 >TOTAL AMOUNT: GHC <?= number_format($total,2) ?></h6>
            </div>

        </div>
    <div class="col-md-6">
      <form class="form-group" action="pdf3.php" method="post">
        <button type="submit" name="pdf_btn" class="btn btn-primary">Print expenditure</button>
      </form>
    </div>

</div>

 <?php

 $connection = mysqli_connect("localhost","root","","school");
 if(isset($_POST['edit_btn']))
 {
  $id = $_POST['edit'];
  $query = "SELECT *FROM `expenditure` WHERE id ='$id'";
  $query_run = mysqli_query($connection,$query);
   foreach ($query_run as $row ) {
 ?>
<div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="ModalLabel">Edit Expenditure</h5>
    <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
       <span aria-hidden="true">&times;</span>
    </button>
  </div>
 <div class="modal-body">
   <form action="update-expenditure.php" method="post">
 <div class="form-row">
   <div class="form-group col-md-6">
     <label for="inputEmail4">Item</label>
          <form action="updatestaff.php" method="post">
          <form action="updatestaff.php" method="post">
     <input type="text" class="form-control" name="item" value="<?php echo $row['item']; ?>">
   </div>
   <div class="form-group col-md-6">
     <label for="inputPassword4">Quantity</label>
     <input type="text" class="form-control" name="quantity"value="<?php echo $row['quantity']; ?>" >
   </div>
 </div>
 <div class="form-group">
   <label for="inputAddress">Amount</label>
   <input type="text" class="form-control" name="amount" placeholder=" Amount"value="<?php echo $row['amount']; ?>">
 </div>
 <div class="form-group">
   <label for="inputAddress2">Purchased By</label>
   <input type="text" class="form-control" name="purchasedb"value="<?php echo $row['purchasedb']; ?>" >
 </div>
 <div class="form-row">
   <div class="form-group col-md-6">
     <label for="inputCity">Purchased From</label>
     <input type="text" class="form-control" name="purchasedf" value="<?php echo $row['purchasedf']; ?>" >
   </div>

   <div class="form-group col-md-4">
     <label for="inputState">Date</label>
     <input type="text" class="form-control" name="date" value="<?php echo $row['date']; ?>" >
   </div

 </div>
 </div>
 <div>
 <button type="submit" class="btn btn-secondary" name="update_btn">update</button>
 <input type="hidden" name="update" value=" <?php echo $row['id'];?>">
 </div>
 </form>
 </div>

  </div>

</div>
</div>
<?php
}}
 ?>
 <?php
 include("include/footer.php");
  ?>
