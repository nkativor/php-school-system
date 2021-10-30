  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="search1.php" method="post">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="search" >
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" name="submit-search">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <div class="card-body">

    </div>
    <!-- Right navbar links -->

    </ul>
  </nav>
<?php
session_start();
if(!$_SESSION['username']){
  header('location: signin.php');
}

 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administrator</span>
    </a>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                details
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admission.php" class="nav-link">
                  <p>Admission Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admissionlist.php" class="nav-link">
                  <p>Admission List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="expenditure.php" class="nav-link">
                  <p>Expenditure</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="class.php" class="nav-link">
                  <p>class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="subject.php" class="nav-link">
                  <i class=""></i>
                  <p>subject</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="search.php" class="nav-link">
                  <i class=""></i>
                  <p>school staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="exam.php" class="nav-link">
                  <i class=""></i>
                  <p> Exam Timetable</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="timetable.php" class="nav-link">
                  <i class=""></i>
                  <p> Class Timetable</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="payroll.php" class="nav-link">
                  <i class=""></i>
                  <p> Payroll</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="search.php" class="nav-link">
                  <i class=""></i>
                  <p>View student</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <button type="button" name="logout_btn" class="btn btn-secondary">logout</button>
                </a>
              </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
