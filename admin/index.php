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

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="tenant.php">Total registered tenants</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
             $query = "SELECT tenant_id FROM tenants ORDER BY tenant_id";  
             $query_run = mysqli_query($connection, $query);
             $row = mysqli_num_rows($query_run);
             echo '<h1> '.$row.'</h1>';
            
              ?>

              </div>
            </div>
            <div class="col-auto" text-align="center;">
              <i class="fa fa-users fa-5x text-gray-400 center"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="houses.php">Total Number of houses</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
             $query = "SELECT house_id FROM houses ORDER BY house_id";  
             $query_run = mysqli_query($connection, $query);
             $row = mysqli_num_rows($query_run);
             echo '<h1> '.$row.'</h1>';
            
              ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-building fa-5x text-gray-400"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="pending.php">Received Receipts</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
             $query = "SELECT invoiceNumber FROM receipts ORDER BY invoiceNumber";  
             $query_run = mysqli_query($connection, $query);
             $row = mysqli_num_rows($query_run);
             echo '<h1> '.$row.'</h1>';
            
              ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="far fa-file-alt fa-5x text-gray-400"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-dark shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-dark text-uppercase mb-1"><a href="vacancy.php">Total Number of Vacant Houses</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
             $query = "SELECT vacancy_id FROM vacancy ORDER BY vacancy_id";  
             $query_run = mysqli_query($connection, $query);
             $row = mysqli_num_rows($query_run);
             echo '<h1> '.$row.'</h1>';
            
              ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-door-open fa-5x text-gray-400"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>