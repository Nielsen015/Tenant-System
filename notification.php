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
    <h6 class="m-0 font-weight-bold text-primary"> Apartment Broadcast Notification Panel
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
    $sr_no=1;
        $query = "SELECT * FROM messages";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Date sent</th>
            <th>Subject</th>
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
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><a href="read.php? id=<?php echo $row['id'];?>">
<button type="button" class="btn btn-info">Read</button></a>
            </td>
          </tr>
          <?php
            }
          } 
          else{
            echo "No Messages Found";
          }
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>
<br>
<br>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>