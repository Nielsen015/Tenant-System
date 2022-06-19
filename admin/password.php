<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Change Your Password</h5>
  </div>
  <div class="card-body">

        <form action="pass.php" method="POST">
                <div class="form-group">
                    <label>Old Password</label>
                    <input type="password" name="oldpassword" class="form-control" placeholder="Enter Old Password" required>
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="newpassword" class="form-control" placeholder="Enter New Password" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="repeatnewpassword" class="form-control" placeholder="Confirm New Password" required>
                </div>
                <a href="profile.php" class="btn btn-danger">Cancel</a>
                <button type="submit" name="pass" class="btn btn-warning">Update</button>

        </form>


            
    </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>