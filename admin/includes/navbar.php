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
    <a class="nav-link" href="index.php">
        <i class="fa fa-home fa-2x"></i>
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
    <a class="nav-link" href="tenant.php">
        <i class="fa fa-users fa-1.6x"></i>
        <span>Tenants</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="users.php">
        <i class="fas fa-user-tie fa-2x"></i>
        <span>Registered Users</span></a>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fa fa-building fa-1.6x"></i>
    <span>Houses & Vacancy</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Select Option:</h6>
      <a class="collapse-item" href="houses.php">Houses</a>
      <a class="collapse-item" href="vacancy.php">Vacancy</a>
    </div>
  </div>
</li>

<!-- Nav Item - messages -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesfour"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-comment-dots fa-1.6x"></i>
                    <span>Compose Messages</span>
                </a>
                <div id="collapsePagesfour" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select Option:</h6>
                        <a class="collapse-item" href="message.php">Broadcast</a>
                        <a class="collapse-item" href="individual.php">Individual Tenant</a>
                    </div>
                </div>
            </li>

 <!-- Nav Item - Receipts Collapse Menu -->
 <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="far fa-file-alt fa-1.6x"></i>
                    <span>Receipts</span><span class="badge badge-danger badge-counter" style="position: relative;top: -10px;left: -0px;">check</span></a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pick A receipt Type:</h6>
                        <a class="collapse-item" href="pending.php">Pending<span class="badge badge-warning badge-counter">
                        <?php
                            $query = "SELECT * FROM receipts where status is null";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                
											<b class="label orange pull-right"><?php echo $row; ?></b>
											<?php } ?>
                      </span>
                        </a>
                        <a class="collapse-item" href="declined.php">Declined<span class="badge badge-danger badge-counter">
                        <?php
                            $status="declined";
                            $query = "SELECT * FROM receipts where status='$status'";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                
											<b class="label orange pull-right"><?php echo $row; ?></b>
											<?php } ?>
                      </span>
                        </a>
                        <a class="collapse-item" href="receipts.php">Approved<span class="badge badge-success badge-counter">
                           <?php
                            $status="closed";
                            $query = "SELECT * FROM receipts where status='$status'";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                
											<b class="label orange pull-right"><?php echo $row; ?></b>
											<?php } ?></span></a>
                    </div>
                </div>
            </li>
<!-- Nav Item - Ntification Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilitiestwo"
      aria-expanded="true" aria-controls="collapseUtilities">
      <i class="far fa-bell fa-1.6x"></i>
        <span>Notifications</span><span class="badge badge-danger badge-counter" style="position: relative;top: -10px;left: -0px;">check</span></a>
  </a>
  <div id="collapseUtilitiestwo" class="collapse" aria-labelledby="headingUtilities"
      data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Pick a Panel:</h6>
          <a class="collapse-item" href="complaint.php">Complaint<span class="badge badge-warning badge-counter">
          <?php
                            $query = "SELECT * FROM complaint where status= 0";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                            <?php echo $row; ?>
											<?php } ?>
      </span></a>
          <a class="collapse-item" href="vacate.php">Vacate<span class="badge badge-danger badge-counter">
          <?php
                            $query = "SELECT * FROM vacate where status= 0";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                <?php echo $row; ?>
											<?php } ?>
      </span></a>
      </div>
  </div>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="broadcast.php">
        <i class="fas fa-bullhorn fa-1.6x"></i>
        <span>Broadcast History</span></a>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="individual_history.php">
        <i class="fas fa-paper-plane fa-1.6x"></i>
        <span>Tenant Message History</span></a>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="payments.php">
        <i class="fas fa-dollar-sign fa-1.6x"></i>
        <span>Payments</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="register.php">
       <i class="fa fa-user fa-1.6x"></i>
        <span>Admin Users</span></a>
</li>
   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-cog fa-pulse fa-2x"></i>
                    <span>Settings</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select Option:</h6>
                        <a class="collapse-item" href="profile.php">Profile</a>
                        <a class="collapse-item" href="activity.php">Activity Logs</a>
                    </div>
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
        $query = "SELECT * FROM register where email ='".$_SESSION['email']."'";
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
              <span class="font-weight-bold"><b>Dear  <?php echo $_SESSION['email']; ?>, Please always check your receipt and notification panels for any receipts filed or new alerts from the Tenants!</b></span></a>
      </li>

      <!-- Nav Item - Messages -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <!-- Counter - Messages -->
          <span class="badge badge-danger badge-counter">1</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">
            Message Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="index.html">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="img/Clogo.jpg" alt="logo">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
              <div><b>Hi there! <?php echo $_SESSION['email']; ?> You can Easily Communicate with the tenants throught the message panel.</b></div>
            </div>
            <a class="dropdown-item text-center" href="individual.php">Click here to Compose Tenant Message</a>
          </a>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">
           <span>&#8659;</span> <?php
        $query = "SELECT * FROM register where email ='".$_SESSION['email']."'";
$query_run = mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
    <?php  echo $row['username']; ?>
    <?php }?>
            
          </span>
           <?php
                    $query = "SELECT * FROM pic where user ='".$_SESSION['email']."'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run))
                    {
                      ?>
                      <?php
                       echo '<img src="profile/'.$row['compfile'].'" alt="profile" class="img-profile rounded-circle">'?>
                 <?php }?>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="profile.php">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <a class="dropdown-item" href="activity.php">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
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