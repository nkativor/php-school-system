<?php
include("include/header.php");
include("include/navbar.php");
include("include/date.php");
 ?>

 <?php

 $connection = mysqli_connect("localhost","root","","school");
 if(isset($_POST['edit_btn']))
 {
  $id = $_POST['edit-id'];
  $query = "SELECT *FROM `payroll` WHERE id = '$id'";
  $query_run = mysqli_query($connection,$query);
   foreach ($query_run as $row ) {
 ?>
 <div class="container">
   <div class="row">
     <div class="card mt-5">
       <div class="card-header text-center">
         <h5>Edit Payroll</h5>
       </div>
       <div class="card-body">
         <form action="updatepayroll.php" method="post">
           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="inputEmail4">STAFF NAME</label>
               <input type="text" class="form-control" name="edit-name" value="<?php echo $row['name']; ?>">
             </div>
             <div class="form-group col-md-6">
               <label for="inputPassword4">SSNIT#</label>
               <input type="" class="form-control" name="edit-ssnit" value="<?php echo $row['ssnit']; ?>">
             </div>
           </div>
           <div class="form-group">
             <label for="inputAddress">ACCOUNT-NO</label>
             <input type="text" class="form-control" name="edit-number"  value="<?php echo $row['number']; ?>">
           </div>
           <div class="form-group">
             <label for="inputAddress2">Bank</label>
             <input type="text" class="form-control" name="edit-bank" value="<?php echo $row['bank']; ?>">
           </div>
           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="inputCity">Salary</label>
               <input type="text" class="form-control" name="edit-salary" value="<?php echo $row['salary']; ?>">
             </div>
             <div class="form-group col-md-4">
               <label for="inputState">Position</label>
               <input type="text" class="form-control" name="edit-position" value="<?php echo $row['position']; ?>">
             </div>
             <div class="form-group col-md-2">
               <label for="inputZip">Date</label>
               <input type="text" class="form-control" name="edit-date" value="<?php echo $row['date']; ?>">
             </div>
           </div>
           <div class="form-group col-md-6 " style="display:flex,padding-right:10px">
             <a href="payroll.php">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </a>
             <input type="hidden" name="update-payroll" value="<?php echo $row['id']; ?>">
              <button type="submit" class="btn btn-primary" name="update_btn">Save changes</button>
           </div>
         </div>


      </form>
       </div>
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
