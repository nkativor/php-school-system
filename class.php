<?php
include("include/header.php");
include("include/navbar.php");
 ?>

<div class="container">
  <div class="row">

    <div class="col-6">

       <div class="card mt-5">
         <div class="card-header">
           <h5 class="modal-title" id="exampleModalLabel"> Student details</h5>
         </div>
         <div class="card-body">
           <div class="form-group ">
             <form class="form-group" action="classcode.php" method="post" >
               <div class="form-group pt-2">
                 <label for="name" style="">Student Name</label><br>
                 <input type="text" name="student-name" value="" class="form-control" style="width:300px" required>
               </div>
               <div class="form-group pt-2">
                 <label for="name" style="">Class Name</label><br>
                 <select class="input2" name="class-name" style="width:300px" class="form-control" required>
                   <option value="">select</option>
                   <option value="creche">creche</option>
                   <option value="nursery">nursery</option>
                   <option value="kg1">kg1</option>
                   <option value="kg2">kg2</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                   <option value="6">6</option>
                   <option value="JHS1">JHS1</option>
                   <option value="JHS2">JHS2</option>
                   <option value="JHS3">JHS3</option>
                 </select>
               </div>
               <div class="form-group pt-2">
                 <label for="section" style="">Class section</label><br>
                 <select class="input2" name="class-section" style="width:300px" class="form-control" required>
                   <option value="">select</option>
                   <option value="A">A</option>
                   <option value="B">B</option>
                   <option value="C">C</option>
                   <option value="D">D</option>
                 </select>
               </div>
             <div class="form-group pt-2">
               <button type="submit" name="submit_btn" class="btn btn-info">Add Class details</button>
             </div>

             </div>
           </div>
             </form>
         </div>
       </div>

    <div class="col-lg-6">
      <div class="card mt-5">
        <div class="card-header">
          <h5 class="modal-title" id="exampleModalLabel"> Class details</h5>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <?php
             include("include/connection.php");
             $query = "SELECT *FROM `class`";
             $query_run= mysqli_query($connection,$query);

             ?>
            <thead>
              <tr>
                <td>S.No</td>
                <td>Student Name</td>
                <td>class Name</td>
                <td>Class Section</td>
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
                   <td> <?php echo $row['class-name']; ?></td>
                   <td> <?php echo $row['class-section']; ?></td>
                   <td>
                     <form class="form-group" action="edit.php" method="post">
                       <input type="hidden" name="class-id" value=" <?php echo $row['id']; ?>">
                       <button type="submit" name="edit_btn" class="btn btn-primary">edit</button>
                     </form>
                   </td>
                   <td>
                     <form class="form-group" action="delete.php" method="post">
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









 <?php
 include("include/footer.php");
  ?>
