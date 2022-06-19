<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Edit House Details</h5>
  </div>
  <div class="card-body">
      <?php 
  if(isset($_POST['edit_housebtn']))
 {
     $house_id = $_POST['edit_house'];

     $query = "SELECT * FROM houses WHERE house_id='$house_id' ";
     $query_run = mysqli_query($connection, $query);

     foreach($query_run as $row) 
     {
       ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_house" value="<?php echo $row['house_id'] ?>" >
            <div class="form-group">
                    <label> House Number</label>
                    <input type="text" name="edit_houseno" value="<?php echo $row['house_no'] ?>" class="form-control" placeholder="Enter House Number">
                </div>
                <div class="form-group">
                    <label>Number of room(s)</label>
                    <input type="number" name="edit_rooms" value="<?php echo $row['rooms'] ?>" class="form-control" placeholder="Enter the number of rooms">
                </div>
                <a href="houses.php" class="btn btn-danger">Cancel</a>
                <button type="submit" name="update_housebtn" class="btn btn-success">Update</button>

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