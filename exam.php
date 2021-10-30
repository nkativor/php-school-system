<?php
include("include/header.php");
include("include/navbar.php");
 ?>

 <div class="container">
   <div class="row">
     <div class="col-md-2 card-header header-elements-inline mt-4 mr-8 ">
       <button type="button" name="button" class="btn btn-primary btn-xs form-control" data-toggle="modal" data-target="#studentaddmodal">
           Add Exam Data +
       </button>

     </div>
     <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="ModalLabel">Add Exam details</h5>
         <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
            <span aria-hidden="true">&times;</span>
         </button>
       </div>
      <div class="modal-body">
        <div class="modal-body">
          <div class="modal-header">
            <h4 style="text-align:center"> Exam Timetable</h4>
          </div>
          <form class="form-group" method="post" action="examcode.php">
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Exam Name</label>
                <input type="text" class="form-control" name="name" required>

              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Select Term</label>
                <select type="text" class="form-control" name="term">
                <option >Choose Term</option>
                <option>I</option>
                <option>II</option>
                <option>III</option>
              </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Class</label>
                <select  name="class" class="form-control" type="text">
                  <option value="">select class</option>
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
                  <option value="JHS3">JH3</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Session</label>
                <select type="text" class="form-control" name="session">
                <option >Choose session</option>
                <option>Morning</option>
                <option>Afternoon</option>
                <option>Evening</option>
              </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">Exams Date</label>
                <?php include("include/date.php") ?>
                <input type="text" class="form-control" name="date" value="<?=$d;?>" required>

              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Subject</label>
                <select type="text" class="form-control" name="subject">
                <?php
                $connection=mysqli_connect("localhost","root","","school");
                $query="SELECT *FROM subject";
                $query_run= mysqli_query($connection,$query);
                if (mysqli_num_rows($query_run)>0) {
                  while($row=mysqli_fetch_assoc($query_run)){
                    ?>
                   <option value="<?php echo $row['subject-name'] ;?>"> <?php echo $row['subject-name'] ;?></option>


                   <?php
                   }
                 }
                   ?>
                   </select>

              </div>
            </div>

            <button class="btn btn-primary" type="submit" name="submit_btn">Submit form</button>
          </form>
        </div
      </div>

       </div>

     </div>
   </div>


 </div>
   </div>
   <div class="col-md-12">
    <div class="justify content-center">

          <div class="card mt-4">
            <div class="card-header text-center">
              <h4 >Exam Timetable</h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <?php
                 include("include/connection.php");
                 $query = "SELECT *FROM `examtb`";
                 $query_run= mysqli_query($connection,$query);

                 ?>
                <thead>
                  <tr>
                    <td>Exam Name</td>
                    <td>Term</td>
                    <td>Session</td>
                    <td>Subject</td>
                    <td>Class</td>
                    <td>Date</td>
                    <td>Delete</td>
                  </tr>
                </thead>

                <tbody>
                  <?php
                   if (mysqli_num_rows($query_run)>0)
                    {
                    while( $row=mysqli_fetch_assoc($query_run)) {
                     ?>
                     <tr>
                       <td> <?php echo $row['examname']; ?></td>
                       <td> <?php echo $row['term']; ?></td>
                       <td> <?php echo $row['session']; ?></td>
                       <td> <?php echo $row['subject']; ?></td>
                       <td> <?php echo $row['class']; ?></td>
                       <td> <?php echo $row['date']; ?></td>

                       <td>
                         <form class="form-group" action="delete-exam.php" method="post">
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
      </div>
    </div>
    <div class="col-md-6 " style="margin-left:50px;">
      <form class="form-group" action="pdf2.php" method="post">
        <button type="submit" name="exam_btn" class="btn btn-info">Print ExamTimetable</button>
      </form>
    </div>
   </div>



 <?php
 include("include/footer.php");
  ?>
