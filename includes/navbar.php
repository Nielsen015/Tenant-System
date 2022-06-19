 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <img src="img/Clogo.jpg" style="top: 0.5%;height: 65;width: 65;position: left;border-top-left-radius: 50% 50%;border-top-right-radius: 50% 50%;border-bottom-right-radius: 50% 50%;border-bottom-left-radius: 50% 50%;" alt="logo">
    <div class="sidebar-brand-text mx-3">CADESONE HOUSING</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="tenants.php">
        <i class="fa fa-home fa-1.6x"></i>
        <span>home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-comment-dots fa-1.6x"></i>
    <span>Compose message</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Select Option:</h6>
      <a class="collapse-item" href="comp.php">Complaint</a>
      <a class="collapse-item" href="vacancy.php">Vacate Notice</a>
    </div>
  </div>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
    <i class="fas fa-paper-plane fa-1.6x"></i>
    <span>Message History</span>
  </a>
  <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Select Option:</h6>
      <a class="collapse-item" href="comp_history.php">Sent Complaints</a>
      <a class="collapse-item" href="vacancy_history.php">Sent Vacate Notices</a>
    </div>
  </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="individual.php">
        <i class="far fa-bell fa-1.6x"></i>
        <span>Notifications</span><span class="badge badge-danger badge-counter" style="position: relative;top: -10px;left: -0px;">

        <?php
                            $query = "SELECT * FROM individualcopy WHERE tenant='".$_SESSION['username']."' AND  status=0";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                
											<b class="label orange pull-right"><?php echo $row; ?></b>
											<?php } ?>
      </span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="notification.php">
        <i class="fas fa-broadcast-tower fa-1.6x"></i>
        <span>Broadcasts</span><span class="badge badge-danger badge-counter" style="position: relative;top: -10px;left: -0px;">

        <?php
                            $query = "SELECT * FROM messages where status= 0";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                
											<b class="label orange pull-right">check</b>
											<?php } ?>
      </span></a>
</li>
<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="upload.php">
        <i class="far fa-file-alt fa-1.6x text-gray-400 "></i>
        <span>Upload Receipt</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="history.php">
        <i class="fas fa-clipboard-list fa-1.6x"></i>
        <span>Upload History</span></a>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="payment.php">
        <i class="fas fa-dollar-sign fa-1.6x"></i>
        <span>Payment History</span></a>
</li>
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-cog fa-pulse fa-2x"></i>
                    <span>Setting</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select an Option:</h6>
                        <a class="collapse-item" href="profile.php">Profile</a>
                        <a class="collapse-item" href="password.php">Change Password</a>
                </div>
            </li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->


 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <button type="button" class="btn btn-primary">
        <?php
        $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
$query_run = mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
    <?php  echo $row['username']; ?>'s  Dashboard
    <?php }?>
            </button>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter">1</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
            System Alerts Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500"></div>
              <span class="font-weight-bold">Dear  <?php echo $_SESSION['username']; ?>, Please always check your notification panel for any new alerts from the admin!</span>
            </div>
          <a class="dropdown-item text-center small text-gray-500" href="individual.php">Show All Alerts</a>
        </div>
      </li>

      <!-- Nav Item - Messages -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <!-- Counter - Messages -->
          <span class="badge badge-danger badge-counter">2</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">
            Message Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="index.html">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="images/Clogo.jpg" alt="logo">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
              <div>Hi there! <?php echo $_SESSION['username']; ?> You can let the management know of any house issues you might have through the complaint panel.</div>
            </div>
            <a class="dropdown-item text-center" href="comp.php">Click here to Complain</a>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="index.html">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="images/Clogo.jpg" alt="logo">
              <div class="status-indicator bg-success"></div>
            </div>
            <div>
              <div class="font-weight-bold">You can now easily let us know if you want to vacate through the vacate notice platform.</div>
            </div>
          </a>
          <a class="dropdown-item text-center" href="vacancy.php"> Click Here Issue a vacate Notice</a>
        </div>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php
        $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
$query_run = mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
    <span>&#8659;</span><?php  echo $row['username']; }?>
            
          </span>
          <?php
                    $query = "SELECT * FROM profile where tenant ='".$_SESSION['username']."'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run))
                    {  ?>
                    <?php
                        if($row['tenant'] < 0 or $row['compfile'] < 0){
                    
                      
                       echo '<img src="profile/default.jpg" alt="profile" class="img-profile rounded-circle">'?>
                       <?php }
                       
                       else{
                           echo '<img src="profile/'.$row['compfile'].'" alt="profile" class="img-profile rounded-circle">'?>
                      <?php }?><span>&#8659;</span>
                 <?php }?>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="profile.php">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <a class="dropdown-item" href="password.php">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
           Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

    <form action="logout.php" method="POST"> 
    
      <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

    </form>


  </div>
</div>
</div>
</div>