<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Edit Tenant Profile</h5>
  </div>
  <div class="card-body">
      <?php 
  if(isset($_POST['edit_tenantbtn']))
 {
     $tenant_id = $_POST['edit_tenant'];

     $query = "SELECT * FROM tenants WHERE tenant_id='$tenant_id' ";
     $query_run = mysqli_query($connection, $query);

     foreach($query_run as $row) 
     {
       ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_tenant" value="<?php echo $row['tenant_id'] ?>" >
            <div class="form-group">
                    <label> First Name </label>
                    <input type="text" name="edit_first" value="<?php echo $row['first_name'] ?>" class="form-control" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="edit_last" value="<?php echo $row['last_name'] ?>" class="form-control" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label>ID Number</label>
                    <input type="number" name="edit_id" value="<?php echo $row['id_no'] ?>" class="form-control" placeholder="Enter ID Number">
                </div>
                <div class="form-group">
                    <label>House Number</label>
                    <input type="text" name="edit_number" value="<?php echo $row['house_no'] ?>" class="form-control" placeholder="Enter  Number">
                </div>
                <a href="tenant.php" class="btn btn-danger">Cancel</a>
                <button type="submit" name="update_tenantbtn" class="btn btn-success">Update</button>

        </form>

            <?php
     }
}
?>

            
    </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>