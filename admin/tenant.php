<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Tenant Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> First Name </label>
                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
                <label>last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group">
                <label>ID No.</label>
                <input type="text" name="id_no" class="form-control" placeholder="Enter ID No." required>
            </div>
            <div class="form-group">
            <label>House Number:</label>
<select id="house_no" name="house_no" class="form-control" required>
    <option value="" selected="selected" class="form-control" disabled="">Select a House</option>
    <?php
    $query = "SELECT house_no FROM houses";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        echo "<option value='".$row['house_no']."'>".$row['house_no']."</option>";
    }

?>
</select>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" name="tenantbtn" class="btn btn-success">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Active Tenants 
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
              Add a Tenant 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
    $sr_no=1;
        $query = "SELECT * FROM tenants";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Serial </th>
            <th>First Name </th>
            <th>Last Name</th>
            <th> ID Number.</th>
            <th>House No.</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>

          
          <tr>
            <td><?php echo $sr_no++; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['id_no']; ?></td>
            <td><?php echo $row['house_no']; ?></td>
            <td>
                <form action="tenant_edit.php" method="post">
                  <input type="hidden" name="edit_tenant" value="<?php echo $row['tenant_id']; ?>">
                  <button type="submit" name="edit_tenantbtn" class="btn btn-success">Edit</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_tenant" value="<?php echo $row['tenant_id']; ?>">
                <button type="submit" name="delete_tenantbtn"class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          <?php
            }
          } 
          else{
            echo "No Record Found";
          }
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>