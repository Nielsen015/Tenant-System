<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php
if(isset($_GET['id']))
{
    $main_id = $_GET['id'];
    $sql_update = mysqli_query($connection,"UPDATE vacate SET status=1 WHERE id='$main_id'");
}
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Vacate Messages
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
        $sr_no=1;
        $query = "SELECT * FROM vacate WHERE status=1";
       $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Tenant</th>
            <th>Message</th>
            <th>Date Sent</th>
           
  
          </tr>
        </thead>
        <tbody>
        <?php
            while($main_result = mysqli_fetch_assoc($query_run))
            {
             ?>

          
          <tr>
            <td><?php echo $sr_no++; ?></td>
            <td><?php echo $main_result['tenant']; ?></td>
            <td><?php echo $main_result['messages']; ?></td>
            <td><?php echo $main_result['date']; ?></td>
             

          </tr>
          <?php
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