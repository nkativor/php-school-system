<?php
include("include/header.php");
include("include/navbar.php");
 ?>

 <?php

 $connection = mysqli_connect("localhost","root","","school");
 if(isset($_POST['edit_btn']))
 {
  $id = $_POST['edit-id'];
  $query = "SELECT *FROM `staff` WHERE id ='$id'";
  $query_run = mysqli_query($connection,$query);
   foreach ($query_run as $row ) {
 ?>

       <div class="">
         <h5 class="modal-title" id="">Edit staff data</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form action="updatestaff.php" method="post">
           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="inputEmail4">Email</label>
               <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
             </div>
             <div class="form-group col-md-6">
               <label for="inputPassword4">Password</label>
               <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
             </div>
           </div>
           <div class="form-group">
             <label for="inputAddress">Name</label>
             <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row['name']; ?>">
           </div>
           <div class="form-group">
             <label for="inputAddress2">Qualification</label>
             <input type="text" class="form-control" name="qualification" value="<?php echo $row['qualification']; ?>">
           </div>
           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="inputCity">Salary</label>
               <input type="text" class="form-control" name="salary" value="<?php echo $row['salary']; ?>">
             </div>
             <div class="form-group col-md-4">
               <label for="inputState">address</label>
               <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
             </div>
             <div class="form-group col-md-2">
               <label for="inputZip">Phone Number</label>
               <input type="text" class="form-control" name="phone-number" value="<?php echo $row['phonenumber']; ?>">
             </div>
           </div>
         </div>
         <div class="form-group col-md-6 " style="display:flex,padding-right:10px">
           <a href="search.php">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </a>
            <input type="hidden" name="update-staff" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn btn-primary" name="submit_btn">Save changes</button>
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
