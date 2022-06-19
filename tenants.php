<?php
include('security.php'); 

include('includes/header.php'); 
include('includes/navbar.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="index.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="	fas fa-globe fa-sm text-white-50 "></i> Go to Website</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!--  Complaint -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="comp.php">Compose a Complaint</a></div>
              <div class="col-auto float-center align-items-center">
              <i class="fas fa-comment-dots fa-5x text-gray-400 center"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Upload/file Receipt -->

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="upload.php">Upload/file Receipt</a></div>
              <div class="col-auto float-center align-items-center">
              <i class="far fa-file-alt fa-5x text-gray-400 center"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- History -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="history.php">Filing History</a></div>
              <div class="col-auto float-center align-items-center">
              <i class="fas fa-clipboard-list fa-5x text-gray-400"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Messages -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="individual.php">Notifications</a></div>
              <div class="col-auto float-center align-items-center">
              <i class="far fa-bell fa-5x text-gray-400 center"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<div>
  <div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>










  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>