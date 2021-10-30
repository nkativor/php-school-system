<?php
include("include/header.php");
include("include/navbar.php");

 ?>
 <section class="content">
   <div class="container mt-5">
     <!-- Small boxes (Stat box) -->
     <div class="row">


                     <div class="col-lg-4 col-6">
                       <!-- small box -->
                       <div class="small-box bg-info">
                         <?php
                           include('include/connection.php');
                           $query="SELECT *FROM `admission`";
                           $query_run=mysqli_query($connection,$query);
                           $totalmembers = mysqli_num_rows($query_run);
                          ?>
                         <div class="inner">

                           <p>TOTAL NUM. OF STUDENTS</p>
                            <h3><?=  number_format($totalmembers); ?></h3>
                         </div>
                         <div class="icon">
                           <i class="ion ion-bag"></i>
                         </div>

                       </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6">
                       <!-- small box -->
                       <div class="small-box bg-success">
                         <div class="inner">
                           <?php

                             include('include/connection.php');
                             $query="SELECT *FROM `staff`";
                             $query_run=mysqli_query($connection,$query);
                             $stuff_no = mysqli_num_rows($query_run);
                            ?>

                           <p>TOTAL NUM. OF STAFF</p>
                           <h3><?=  number_format($stuff_no); ?></h3>

                         </div>
                         <div class="icon">
                           <i class="ion ion-stats-bars"></i>
                         </div>

                       </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6">
                       <!-- small box -->
                       <div class="small-box bg-warning">
                         <?php
                           include('include/connection.php');
                           $query="SELECT *FROM `payroll`";
                           $query_run=mysqli_query($connection,$query);
                           $no_payroll = mysqli_num_rows($query_run);
                          ?>
                         <div class="inner">

                           <p>TOTAL NUM. ON PAYROLL</p>
                           <h3><?=number_format($no_payroll); ?></h3>
                         </div>
                         <div class="icon">
                           <i class="ion ion-person-add"></i>
                         </div>

                       </div>
                     </div>

</div>
<div>
 </section>

<?php
include("include/footer.php");
 ?>
