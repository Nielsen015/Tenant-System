<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-peimary">Edit Vacancy Details</h5>
  </div>
  <div class="card-body">
      <?php 
  if(isset($_POST['edit_vacancybtn']))
 {
     $vacancy_id = $_POST['edit_vacancy'];

     $query = "SELECT * FROM vacancy WHERE vacancy_id='$vacancy_id' ";
     $query_run = mysqli_query($connection, $query);

     foreach($query_run as $row) 
     {
       ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_vacancy" value="<?php echo $row['vacancy_id'] ?>" >
            <div class="form-group">
                    <label> House Number</label>
                    <input type="text" name="edit_house" value="<?php echo $row['house_no'] ?>" class="form-control" placeholder="Enter House Number">
                </div>
                <div class="form-group">
                    <label>Condition</label>
                    <input type="text" name="edit_condition" value="<?php echo $row['state'] ?>" class="form-control" placeholder="Type House Condition:Good,bad or new">
                </div>
                <a href="tenant.php" class="btn btn-danger">Cancel</a>
                <button type="submit" name="update_vacancybtn" class="btn btn-success">Update</button>

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