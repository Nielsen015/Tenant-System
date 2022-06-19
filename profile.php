<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container">
    <div class="main-body">
    
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="tenants.php">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                     <?php
                    $query = "SELECT * FROM profile where tenant ='".$_SESSION['username']."'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run))
                    {
                      ?>
                      <?php
                       echo '<img src="../profile/'.$row['compfile'].'" alt="profile" class="rounded-circle" height="130"width="130">'?>
                 <?php }?>
                    <div class="mt-9">
                    <form action="picture.php" method="POST" enctype="multipart/form-data">
                    <label for="myfile">Change Profile Picture:</label>
                    <input type="file" name="compfile" class="form-control" accept=".jpeg, .jpg, .png" value="" required>
                    <div class="button">
          <input type="submit"  name="submit" class="btn btn-success" value="Upload">
        </div>
      </form>
      <?php 

$query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
$query_run = mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>Username:</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['username']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>Full Name:</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['first_name']; ?>    <?php echo $row['last_name']; ?>
                    </div>
                    </div>
                    <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>ID Number:</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['id_no']; ?>
                    </div>
                    </div>
                    <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>Email:</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['email']; ?>
                    </div>
                    </div>
                    <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>House Number:</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['house_no']; ?>
                    </div>
                    </div>
                  </div>
                  </div>
</div>


            </div>
          </div>
</div>

    </div>
    <?php } 
include('includes/scripts.php');
include('includes/footer.php');
?>