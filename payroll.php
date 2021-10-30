<?php
include("include/header.php");
include("include/navbar.php");
include("include/date.php");
 ?>

  <div class="container">
    <div class="row">
      <div class="col-md-2 card-header header-elements-inline mt-4 mr-8 ">
        <button type="button" name="button" class="btn btn-primary btn-xs form-control" data-toggle="modal" data-target="#studentaddmodal">
            Add Payroll Data +
        </button>

      </div>
      <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Add Payroll</h5>
          <button type="button" name="button" class="close" data-dismiss="modal" arial-label="close">
             <span aria-hidden="true">&times;</span>
          </button>
        </div>
       <div class="modal-body">

          <form action="payrollcode.php" method="post">
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Staff Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">SSNIT#</label>
            <input type="text" class="form-control" name="ssnit">
          </div>
          </div>
          <div class="form-group">
          <label for="inputAddress">Account Number</label>
          <input type="text" class="form-control" name="number" placeholder="Account number">
          </div>
          <div class="form-group">
          <label for="inputAddress2">Bank</label>
          <input type="text" class="form-control" name="bank">
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Salary</label>
            <input type="text" class="form-control" name="salary">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Position</label>
            <input type="text" class="form-control" name="position">
          </div>
          <div class="form-group col-md-2">
            <label for="inputState">Date</label>
            <input type="text" class="form-control" name="date" value="<?=$d;?>">
          </div

          </div>

          <button type="submit" class="btn btn-secondary" name="payroll_btn">Add Payroll details</button>
        </form>

       </div>

        </div>

      </div>
    </div>


  </div>
      <div class="card">

            <div class="card-header header-elements-inline">
                <h5 class="card-title"> List Of All Employees</h5>

        </div>

         <div class="card-body">

                         <table class="table table-bordered" >
                             <thead>
                                 <tr>
                                     <th class="text-center">NAME</th>
                                     <th class="text-center">ACCOUNT#.</th>
                                     <th class="text-center">BANK<br /> BRANCH</th>
                                     <th class="text-center">SSNIT#</th>
                                     <th class="text-center">SALARY</th>
                                     <th class="text-center">POSITION</th>
                                     <th class="text-center">DATE.</th>
                                     <th class="text-center">EDIT</th>
                                     <th class="text-center">DELETE</th>
                                 </tr>
                             </thead>
                             <?php
                              include("include/connection.php");
                              $query = "SELECT *FROM `payroll`";
                              $query_run= mysqli_query($connection,$query);

                              ?>
                             <tbody>
                               <?php
                                if (mysqli_num_rows($query_run)>0)
                                 {
                                 while( $row=mysqli_fetch_assoc($query_run)) {
                                  ?>
                                  <tr>
                                    <td> <?php echo $row['name']; ?></td>
                                    <td> <?php echo $row['ssnit']; ?></td>
                                    <td> <?php echo $row['number']; ?></td>
                                    <td> <?php echo $row['bank']; ?></td>
                                    <td> <?php echo $row['salary']; ?></td>
                                    <td> <?php echo $row['position']; ?></td>
                                    <td> <?php echo $row['date']; ?></td>
                                    <td>
                                      <form class="form-group" action="editpayroll.php" method="post">
                                        <input type="hidden" name="edit-id" value=" <?php echo $row['id'];?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                                      </form>
                                    </td>
                                    <td>
                                      <form class="form-group" action="deletepayroll.php" method="post">
                                        <input type="hidden" name="delete_id" value=" <?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger" id="dlbtn">delete</button>
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
          <div class="col-md-6">
            <form class="form-group" action="pdf.php" method="post">
              <button type="submit" name="pdf_btn" class="btn btn-info">Print Pay-Roll</button>
            </form>
          </div>

    </div>

    </div>



 <?php
 include("include/footer.php");
  ?>
