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
    <h6 class="m-0 font-weight-bold text-primary"> Your Filing History
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
        $query = "SELECT * FROM receipts WHERE tenant='".$_SESSION['username']."'";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Invoice Number</th>
            <th>Date Filed</th>
            <th>Last Updation Date</th>
            <th>Status</th>
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
            <td><?php echo $row['invoiceNumber']; ?></td>
            <td><?php echo $row['regDate']; ?></td>
            <td><?php echo $row['lastUpdationDate']; ?></td>
            <td><?php 
                                    $status=$row['status'];
                                    if($status=="" or $status=="NULL")
                                    { ?>
                                      <button type="button" class="btn btn-warning">Pending</button>
                                   <?php }
 if($status=="declined"){ ?>
<button type="button" class="btn btn-danger">Declined</button>
<?php }
if($status=="closed") {
?>
<button type="button" class="btn btn-success">Approved</button>
<?php } ?></td>
            <td><a href="details.php?cid=<?php echo $row['invoiceNumber'];?>">
<button type="button" class="btn btn-info">View Details</button></a>
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
<br>
<br>
<br>
<br>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>