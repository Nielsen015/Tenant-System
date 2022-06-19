<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Edit Tenant Payment Data</h5>
  </div>
  <div class="card-body">
      <?php 
  if(isset($_POST['edit_paybtn']))
 {
     $id = $_POST['edit_pay'];

     $query = "SELECT * FROM payment WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);

     foreach($query_run as $row) 
     {
       ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_pay" value="<?php echo $row['id'] ?>" >
            <div class="form-group">
                <label>Amount Paid</label>
                <input type="number" name="edit_amount" value="<?php echo $row['amount'] ?>" class="form-control" placeholder="Enter Amount">
            </div>
            <div class="form-group">
                <label>Balance Due</label>
                <input type="number" name="edit_balance" value="<?php echo $row['balance'] ?>" class="form-control" placeholder="Enter Balace Due">
            </div>
            <div class="form-group">
                <label>Rental Month</label>
                <Select  id="month" name="edit_month"  value="<?php echo $row['month'] ?>" class="form-control" placeholder="<?php echo $row['month'] ?>">
                    <option value="<?php echo $row['month'] ?>" selected="disabled"><?php echo $row['month'] ?></option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="april">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </Select>
            </div>
                <a href="payments.php" class="btn btn-danger">Cancel</a>
                <button type="submit" name="update_paybtn" class="btn btn-success">Update</button>

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