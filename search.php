<?php
include("include/header.php");
include("include/navbar.php");
 ?>


<div class="container">
  <div class="col-md-2 card-header header-elements-inline mt-4 mr-8 ">
    <button type="button" name="button" class="btn btn-primary btn-xs form-control" data-toggle="modal" data-target="#studentaddmodal">
        Add Staff Data +
    </button>

  </div>
  <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="ModalLabel">Add student</h5>
      <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
         <span aria-hidden="true">&times;</span>
      </button>
    </div>
   <div class="modal-body">
    <form action="staffcode.php" method="post">
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputEmail4">Email</label>
       <input type="email" class="form-control" name="email">
     </div>
     <div class="form-group col-md-6">
       <label for="inputPassword4">Password</label>
       <input type="password" class="form-control" name="password">
     </div>
   </div>
   <div class="form-group">
     <label for="inputAddress">Name</label>
     <input type="text" class="form-control" name="name" placeholder="Name">
   </div>
   <div class="form-group">
     <label for="inputAddress2">Qualification</label>
     <input type="text" class="form-control" name="qualification">
   </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputCity">Salary</label>
       <input type="text" class="form-control" name="salary">
     </div>
     <div class="form-group col-md-4">
       <label for="inputState">address</label>
       <input type="text" class="form-control" name="address">
     </div>
     <div class="form-group col-md-2">
       <label for="inputZip">Phone Number</label>
       <input type="text" class="form-control" name="phone-number">
     </div>
   </div>

   <button type="submit" class="btn btn-primary" name="staff_btn">Add staff details</button>
   </form>
   </div>

    </div>

  </div>
</div>


</div>
  <div class="row">
    <div class="card">
      <div class="card-header text-center">
        <h5 class="modal-title" id="exampleModalLabel"> Staff details</h5>
      </div>
      <div class="card-body">
        <div class="table">
          <table class="table table-bordered table-striped bg-white">
            <?php
             include("include/connection.php");
             $query = "SELECT *FROM `staff`";
             $query_run= mysqli_query($connection,$query);

             ?>
            <thead>
              <tr>
                <td>ID</td>
                <td> Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Qualification</td>
                <td>Salary</td>
                <td>Address</td>
                <td>Phone Number</td>
                <td>Edit</td>
                <td>Delete</td>
              </tr>
            </thead>

            <tbody>
              <?php

                foreach($query_run as $row) {
                 ?>
                 <tr>
                   <td> <?php echo $row['id']; ?></td>
                   <td> <?php echo $row['name']; ?></td>
                   <td> <?php echo $row['email']; ?></td>
                   <td> <?php echo $row['password']; ?></td>
                   <td><?php echo $row['qualification']; ?></td>
                   <td><?php echo $row['salary']; ?></td>
                   <td> <?php echo $row['address']; ?></td>
                   <td> <?php echo $row['phonenumber']; ?></td>
                   <td>
                     <form class="form-group" action="editstaff.php" method="post">
                       <input type="hidden" name="edit-id" value=" <?php echo $row['id']; ?>">
                       <button type="submit" class="btn btn-success "name="edit_btn" data-toggle="modal" data-target="#myModal" id="mybtn">
                         Edit
                       </button>
                     </form>

                   </td>

                   <td>
                     <form class="" action="deletestaff.php" method="post">
                       <input type="hidden" name="d_id" value=" <?php echo $row['id']; ?>">
                       <button type="submit" name="delete_staff" class="btn btn-danger">delete</button>
                     </form>

                     </td>


                 </tr>
                 <?php
                }


              ?>

            </tbody>
      </div>
    </div>



</div>





<?php
include("include/footer.php");
 ?>
