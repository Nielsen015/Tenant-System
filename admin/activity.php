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
    <h6 class="m-0 font-weight-bold text-primary">System Users activity log 
    </h6>
  </div>

  <div class="card-body">


    <div class="table-responsive">

    <?php
        $query = "SELECT * FROM userlog";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Username</th>
            <th> User IP Adress </th>
            <th>Login Time</th>
            <th>Logout Time</th>
            <th>Status</th>
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
                                            <td><?php echo $row['id'];?></td>
											<td><?php echo $row['username'];?></td>
											<td><?php echo $row['userip'];?></td>
											<td> <?php echo $row['loginTime'];?></td>
											<td><?php echo  $row['logout']; ?></td>
										<td><?php $st=$row['status'];

                                                if($st==1)
                                                {
                                                	echo "Successfull";
                                                }
                                                else
                                                {
                                                	echo "Failed";
                                                }
                                                										 ?></td>
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