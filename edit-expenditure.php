<?php
include("include/header.php");
include("include/navbar.php");
 ?>

 <?php

 $connection = mysqli_connect("localhost","root","","school");
 if(isset($_POST['edit_btn']))
 {
  $id = $_POST['edit'];
  $query = "SELECT *FROM `expenditure` WHERE id ='$id'";
  $query_run = mysqli_query($connection,$query);
   foreach ($query_run as $row ) {
 ?>
 <div class="card">
      <div class="card-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit school expenditure</h5>
      </div>
      <div class="card-body">
        <form action="update-expenditure.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Item</label>
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
 <?php
}
}
  ?>

<?php
include("include/footer.php");
 ?>
