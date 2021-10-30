<?php
include("include/header.php");
include("include/navbar.php");
include("include/connection.php");
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-2 card-header header-elements-inline mt-4 mr-8 ">
      <button type="button" name="button" class="btn btn-primary btn-xs form-control" data-toggle="modal" data-target="#studentaddmodal">
          Add ClassTimeTable Data +
      </button>

    </div>
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add Class Timetable</h5>
        <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
           <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
       <form action="timetablecode.php" method="post">
      <div class="form-row">
       <div class="form-group col-md-6">
         <label for="inputEmail4">Class Name</label>
           <select class="form-control" name="classname" type="text">
             <option value="">select class</option>
         <?php
           $query = "SELECT* FROM `class`";
           $query_run = mysqli_query($connection,$query);
           if(mysqli_num_rows($query_run)>0){
             while ($row=mysqli_fetch_assoc($query_run)) {
            ?>

              <option value="<?php echo $row['class-name']; ?>"><?php echo $row['class-name']; ?></option>

            <?php
             }
           }

         ?>
         </select>
       </div>
       <div class="form-group col-md-6">
         <label for="inputPassword4">Subject</label>
              <select class="form-control" name="subject" type="text">
                <option value="">slect subject</option>
                <?php
                  $query = "SELECT* FROM `subject`";
                  $query_run = mysqli_query($connection,$query);
                  if(mysqli_num_rows($query_run)>0){
                    while ($row=mysqli_fetch_assoc($query_run)) {
                   ?>

                     <option value="<?php echo $row['subject-name']; ?>"><?php echo $row['subject-name']; ?></option>

                   <?php
                    }
                  }

                ?>
                </select>
       </div>
      </div>
      <div class="form-group">
       <label for="inputAddress">Teacher</label>
         <select class="form-control" name="teacher" type="text">
           <option value="">select Teacher</option>
           <?php
             $query = "SELECT* FROM `staff`";
             $query_run = mysqli_query($connection,$query);
             if(mysqli_num_rows($query_run)>0){
               while ($row=mysqli_fetch_assoc($query_run)) {
              ?>

                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>

              <?php
               }
             }

           ?>
           </select>
      </div>
      <div class="form-group">
       <label for="inputAddress2">Time</label>
       <?php
      $t=time();

      ?>
       <input type="text" class="form-control" name="time" value="<?=$t;?>">

      </div>
      <div class="form-row">
       <div class="form-group col-md-6">
         <label for="inputCity">Day</label>
         <input type="text" class="form-control" name="day">
       </div>
      </div>
      <button type="submit" class="btn btn-primary" name="submit_btn">Add details</button>
      </div>
      </form>
     </div>

      </div>

    </div>
  </div>


</div>
    <div class="card mt-4">
      <div class="card-header">
        <h4 style="text-align:center"> Class Timetable</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>Class Name</td>
              <td>Teacher</td>
              <td>Subject</td>
              <td>Day</td>
              <td>Time</td>
            </tr>
            <tbody>

              <?php
               $query="SELECT *FROM `timetable`";
               $query_run=mysqli_query($connection,$query);
               if (mysqli_num_rows($query_run)>0) {
                 while($row=mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                <td><?php echo $row['classname'] ;?></td>
                <td><?php echo $row['teacher'] ;?></td>
                <td><?php echo $row['subject'] ;?></td>
                <td><?php echo $row['day'] ;?></td>
                <td><?php echo $row['time'] ;?></td>
                <?php
                 }
               }
           ?>


              </tr>
            </tbody>
          </thead>
        </table>
     </div>

     <div class="col-md-6">
       <form class="form-group" action="pdf1.php" method="post">
         <button type="submit" name="tb_btn" class="btn btn-info btn-sm">Print Timetable</button>
       </form>
     </div>
      </div>
    </div>

  </div>

</div>

<?php
include("include/footer.php");
  ?>
