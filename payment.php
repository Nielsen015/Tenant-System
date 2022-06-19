<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Your Payment Record(s) 
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
        $sr_no=1;
        $query = "SELECT payment.*,users.house_no as number from payment join users on users.house_no=payment.house_no where users.username='".$_SESSION['username']."'";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Serial </th>
            <th> Amount Paid</th>
            <th>Balance Due</th>
            <th>Rental Year</th>
            <th>Rental Month</th>
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
            <td><button type="button" class="btn btn-success">Ksh <?php echo $row['amount']; ?></button></td>
            <td> <button type="button" class="btn btn-danger">Ksh <?php echo $row['balance']; ?></button></td>
            <td><?php echo $row['year']; ?></td>
            <td><?php echo $row['month']; ?></td>
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
        </div>
        </div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>