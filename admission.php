<?php
include("include/header.php");
include("include/navbar.php");
include("include/date.php");
 ?>
 ?>
 <?php
 if(!isset($_SESSION['username'])){
   header("location: signin.php");
 }
  ?>
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-center">
        <h5 >Add Student Admission details</h5>
      </div>
      <div class="card-body">
        <form action="admissioncode.php" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">ID</label>
          <input type="text" class="form-control" name="sid">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Student Name</label>
          <input type="text" class="form-control" name="sname">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress"> Fathers Name</label>
        <input type="text" class="form-control" name="fname" placeholder="Fathers Name">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Mothers Name</label>
        <input type="text" class="form-control" name="mname" >
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Gender</label>
          <select class="form-control" name="gender">
            <option value="">select gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="others">Others</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Parents Mail Id</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group col-md-2">
          <label for="inputState">#Phone No.</label>
          <input type="text" class="form-control" name="number" >
        </div>

      </div>
      <div class="form-row">
      <div class="form-group col-md-6">
          <label for="inputState">Section</label>
          <input type="text" class="form-control" name="section">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Image</label>
          <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group col-md-2">
          <label for="inputState">Date of Birth</label>
          <input type="text" class="form-control" name="date" value="<?=$d;?>">
        </div>

      </div>
      <div class="form-row" >
        <div class="form-group col-md-6">
          <label for="inputCity">Address</label>
          <textarea name="address" rows="8" cols="80"></textarea>
        </div>
      </div>
      <div class="form-group col-md-2">
        <label for="inputState">Class</label>
        <select name="class" id="" class="form-control">
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
         <option value="JHS2">JH2</option>
         <option value="JHS3">JHS3</option>
        </select>
      </div>

      <button type="submit" class="btn btn-secondary" name="admission_btn">Add details</button>
      </form>
      </div>
    </div>


  </div>

 <?php
 include("include/footer.php");
  ?>
