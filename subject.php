<?php
include("include/header.php");
include("include/navbar.php");
 ?>

 <div class="container">
   <div class="row">

     <div class="col-6">
       <div class="card mt-5">
         <div class="card-header">
           <h5 class="modal-title" id="exampleModalLabel"> Add Subject Details</h5>
         </div>
         <div class="card-body">
           <div class="form-group ">
             <form class="form-group" action="subjectcode.php" method="post" >

               <div class="form-group pt-2">
                 <label for="id" style="">S.No</label><br>
                 <input type="text" name="sub_id" class="form-control" style="width:300px" required>
               </div>
               <div class="form-group pt-2">
                 <label for="name" style="">Subject Name</label><br>
                 <input type="text" name="subject_name" value="" class="form-control" style="width:300px" required>
               </div>
             <div class="form-group pt-2">
               <button type="submit" name="sub_btn" class="btn btn-secondary">Add subject</button>
             </div>

             </div>
           </div>
             </form>

         </div>
       </div>

     <div class="col-6">
       <div class="card mt-5">
         <div class="card-header">
           <h5 class="modal-title" id="exampleModalLabel"> Subject Details</h5>
         </div>
         <div class="card-body">
           <div class="table">
             <table class="table table-bordered table-striped">
               <?php
                include("include/connection.php");
                $query = "SELECT *FROM `subject`";
                $query_run= mysqli_query($connection,$query);

                ?>
               <thead>
                 <tr>
                   <td>S.No</td>
                   <td>Subject Name</td>
                   <td>Delete</td>
                 </tr>
               </thead>

               <tbody>
                 <?php

                   foreach($query_run as $row) {
                    ?>
                    <tr>
                      <td> <?php echo $row['id']; ?></td>
                      <td> <?php echo $row['subject-name']; ?></td>

                      <td>
                        <form class="form-group" action="deletesubject.php" method="post">
                          <input type="hidden" name="delete_id" value=" <?php echo $row['id']; ?>">
                          <button type="submit" name="delete_btn" class="btn btn-danger">delete</button>
                        </form>

                      </td>


                    </tr>
                    <?php
                   }


                 ?>

               </tbody>
             </table>
           </div>

         </div>
       </div>

     </div>
   </div>
 </div>




 <?php
 include("include/footer.php");
  ?>
