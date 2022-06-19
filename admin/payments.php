<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Tenant Payment Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> House Number </label>
                <select id="house_no" name="house_no" class="form-control" required>
                    <option value="" selected="selected" class="form-control" disabled="">Select House Number</option>
                    <?php
                    $query = "SELECT house_no FROM users";
                    $query_run = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_array($query_run)) {
                        echo "<option value='".$row['house_no']."'>".$row['house_no']."</option>";
                    }

                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Amount Paid</label>
                <input type="number" name="amount" class="form-control" placeholder="Enter Rent Paid" required>
            </div>
            <div class="form-group">
                <label>Balance Due</label>
                <input type="number" name="balance" class="form-control" placeholder="Enter Balance" required>
            </div>
            <div class="form-group">
            <label>Rental Year</label>
            <Select  id="year" name="year" class="form-control" required>
            <option value="" selected="disabled">Select Rental Year</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2025">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
        </Select>
          </div>
            <div class="form-group">
                <label>Rental Month</label>
                <Select  id="month" name="month" class="form-control" required>
                    <option value="" selected="disabled">Select Rental Month</option>
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
         </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" name="rentbtn" class="btn btn-success">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tenant Payment Data 
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
              Add a Tenant Payment 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
    $sr_no=1;
        $query = "SELECT * FROM payment";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Serial </th>
            <th>House Number </th>
            <th> Amount Paid</th>
            <th>Balance Due</th>
            <th>Rental Year</th>
            <th>Rental Month</th>
            <th>Action</th>
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
            <td><?php echo $row['house_no']; ?></td>
            <td><button type="button" class="btn btn-success">Ksh <?php echo $row['amount']; ?></button></td>
            <td><button type="button" class="btn btn-danger">Ksh <?php echo $row['balance']; ?></button></td>
            <td><?php echo $row['year']; ?></td>
            <td><?php echo $row['month']; ?></td>
       
            <td>
                <form action="pay_edit.php" method="post">
                  <input type="hidden" name="edit_pay" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="edit_paybtn" class="btn btn-success">Edit</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_payment" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_paybtn"class="btn btn-danger">Delete</button>
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
        </div>
        </div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>