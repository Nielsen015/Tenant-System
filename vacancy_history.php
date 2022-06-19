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
    <h6 class="m-0 font-weight-bold text-primary"> Your Message History Panel (Notices)
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
      $sr_no=1;
      $query = "SELECT * from vacate1 where tenant='".$_SESSION['username']."' ";
      $query_run = mysqli_query($connection,$query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Vacate Date</th>
            <th>Date sent</th>
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
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['messages']; ?></td>
             <td><?php echo $row['day']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_vacate" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_vacatebtn"class="btn btn-danger">Delete</button>
            </form>
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
        </div>
        </div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>