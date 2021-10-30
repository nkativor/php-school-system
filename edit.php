<?php
session_start();
include("include/header.php");
include("include/navbar.php");
 ?>
 
 <?php

$connection = mysqli_connect("localhost","root","","school");
if(isset($_POST['edit_btn']))
{
  $id = $_POST['class-id'];
  $query = "SELECT *FROM `class` WHERE id ='$id'";
  $query_run = mysqli_query($connection,$query);
   foreach ($query_run as $row ) {
 ?>

        <div class="row">
          <div class="justify content-center offset-2">
            <div class="col-md-10">
               <form class="form-group mt-5" action="code.php" method="post">
                 <div class="form-header">
                   <h2>Edit page</h2>
                 </div>
                 <div class="form-group">
                   <label for="name">Student Name</label>
                   <input type="text" name="name" style="width:400px" value="<?php echo $row['name']; ?>" placeholder="" class="form-control" autocomplete="off" required>
                 </div>
                 <div class="form-group">
                   <label for="username">Class name</label>
                   <input type="text" name="class-name" style="width:400px" value="<?php echo $row['class-name']; ?>" placeholder="" class="form-control" autocomplete="off" required>
                 </div>

                 <div class="form-group">
                   <label for="password">class-section</label>
                   <input type="text" name="class-section" style="width:400px"value="<?php echo $row['class-section']; ?>" placeholder="12345" class="form-control" autocomplete="off" required>
                 </div>

                   <div class="form-group" >
                     <a href="class.php" class="btn btn-danger">Return</a>
                     <button type="submit" name="update_btn" class="btn btn-primary " style="width:150px">update</button>
                     <input type="hidden" name="update-id" value="<?php echo $row['id']; ?>">
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
