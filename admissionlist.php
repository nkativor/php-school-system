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
  <div class="card mt-5">
    <div class="card-header text-center">
      <h5 > Student Admission List</h5>
    </div>
    <div class="card-body">
      <table class="table table-bordered" >
              <thead>
                  <tr>
                      <th class="text-center">S.ID</th>
                      <th class="text-center">STUDENT NAME.</th>
                      <th class="text-center">DATE OF BIRTH</th>
                      <th class="text-center">GENDER</th>
                      <th class="text-center">ADDRESS</th>
                      <th class="text-center">CLASS</th>
                      <th class="text-center">SECTION</th>
                      <th class="text-center">IMAGE</th>
                      <th class="text-center">DELETE</th>
                  </tr>
              </thead>
              <?php
               include("include/connection.php");
               $query = "SELECT *FROM `admission`";
               $query_run= mysqli_query($connection,$query);

               ?>
              <tbody>
                <?php
                 if (mysqli_num_rows($query_run)>0)
                  {
                  while( $row=mysqli_fetch_assoc($query_run)) {
                   ?>
                   <tr>
                     <td> <?php echo $row['sid']; ?></td>
                     <td> <?php echo $row['mname']; ?></td>
                     <td> <?php echo $row['date']; ?></td>
                     <td> <?php echo $row['gender']; ?></td>
                     <td> <?php echo $row['address']; ?></td>
                     <td> <?php echo $row['class']; ?></td>
                     <td> <?php echo $row['section']; ?></td>
                     <td><img src="uploads/<?php echo $row['image'];?>" alt=" " height="75" width="75"></td>
                     <td>
                       <form class="form-group" action="deleteadmission.php" method="post">
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
    </div>
  </div>

        </div>

    <?php
    include("include/footer.php");
     ?>
