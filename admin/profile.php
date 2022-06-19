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
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                    $query = "SELECT * FROM pic where user ='".$_SESSION['email']."'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run))
                    {
                      ?>
                      <?php
                       echo '<img src="profile/'.$row['compfile'].'" alt="profile" class="rounded-circle" height="130"width="130">'?>
                 <?php }?>
                    <div class="mt-9">
                    <form action="picture.php" method="POST" enctype="multipart/form-data">
                    <label for="myfile">Change Profile Picture:</label>
                    <input type="file" name="compfile" id="image"class="form-control" accept=".jpeg, .jpg, .png" value="" required>
                    <div class="button">
          <input type="submit"  name="submit" class="btn btn-success" value="Upload">
        </div>
      </form>
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
                    <?php 

$query = "SELECT * FROM register where email ='".$_SESSION['email']."'";
$query_run = mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['username']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['email']; ?>
                    </div>
                    </div>
                  <hr>
                  <button  name="profile_btn" class="btn btn-success"><a href="password.php" style="color:#fff;">Change Password</a></button>
                </div>
              </div>


            </div>
          </div>
          </div>
          <br>
          <br>
          <br><br><br>
          <br>
          <br>
          <br>
          <br>
          <br>

    </div>
    <?php } 
include('includes/scripts.php');
include('includes/footer.php');
?>