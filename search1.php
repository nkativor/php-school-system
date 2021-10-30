<?php
include("include/header.php");
include("include/navbar.php");
include("include/date.php");
 ?>
 <div class="container">
   <div class="card mt-5">
     <div class="card-header text-center">
       <h5> Student Details</h5>
     </div>
     <div class="card-body">
       <table class="table table-bordered" >
               <thead>
                   <tr>
                       <th class="text-center">S.ID</th>
                       <th class="text-center">STUDENT NAME.</th>
                       <th class="text-center">GENDER</th>
                       <th class="text-center">CLASS</th>
                       <th class="text-center">SECTION</th>
                       <th class="text-center">IMAGE</th>

                   </tr>
               </thead>
               <?php
                include("include/connection.php");
                if(isset($_POST['submit-search'])){
                $search=mysqli_real_escape_string($connection,$_POST['search']);
                $sql = "SELECT *FROM admission WHERE sname LIKE '%$search%' or sid LIKE '%$search%'";
                $result = mysqli_query($connection,$sql);
                $queryresult = mysqli_num_rows($result);

                ?>
               <tbody>
                 <?php
                 if($queryresult>0){
                   while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                      <td> <?php echo $row['sid']; ?></td>
                      <td> <?php echo $row['sname']; ?></td>
                      <td> <?php echo $row['gender']; ?></td>
                      <td> <?php echo $row['class']; ?></td>
                      <td> <?php echo $row['section']; ?></td>
                     <td><img src="uploads/<?php echo $row['image'];?>" alt=" " height="75" width="75"></td>

                    </tr>
                    <?php
                   }
      }
      }
                 ?>

               </tbody>
           </table>
       </div>
     </div>
   </div>
 </div>



 <?php
 include("include/footer.php");
  ?>
