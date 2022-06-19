<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Vacancy Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">
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
            <div class="form-group">
            <label>House Condition:</label>
            <select id="state" name="state" class="form-control" required>
            <option value="" selected="selected" class="form-control" disabled="">Select House Condition</option>
            <option value="new">New</option>
            <option value="good">Good</option>
            <option value="bad">Bad</option>
            </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" name="vacancybtn" class="btn btn-success">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-priamry">Vacancy
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
              Add a Vacant House
            </button>
    </h6>
  </div>

    <div class="table-responsive">

    <?php
    $sr_no=1;
        $query = "SELECT * FROM vacancy";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Serial </th>
            <th> House Number</th>
            <th>House Condition </th>
            <th>Action </th>
            <th>Action </th>
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
            <td><?php echo$sr_no++; ?></td>
            <td><?php echo $row['house_no']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td>
                <form action="vacancy_edit.php" method="post">
                  <input type="hidden" name="edit_vacancy" value="<?php echo $row['vacancy_id']; ?>">
                  <button type="submit" name="edit_vacancybtn" class="btn btn-success">Edit</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_vacancy" value="<?php echo $row['vacancy_id']; ?>">
                <button type="submit" name="delete_vacancybtn"class="btn btn-danger">Delete</button>
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