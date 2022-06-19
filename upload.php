<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );


?>
  <div class="container">
    <div class="title">Please Fill In with the Correct details</div>
    <div class="content">
    <form action="usercode.php" method="POST" enctype="multipart/form-data">
      <?php
      if (!isset($_SESSION['username']) || ($_SESSION['username'] == '')) 
      {
        $session_id=$_SESSION['username'];
      }
      ?>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Rental Year</span>
            <Select  id="year" name="year" class="form-control" required>
            <option value="" selected="disabled">Select Year</option>
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
          <div class="input-box">
            <span class="details">Rental Month</span>
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
          <div class="input-box">
            <span class="details">Type of Payment</span>
            <Select  id="paymenttype" name="paymenttype" class="form-control" required>
                <option value="" selected="disabled">Click to Select Payment Type</option>
                <option value="Monthly">monthly</option>
                <option value="Quaterly">Quaterly</option>
                <option value="Annually">Annually</option>
            </Select>
          </div>
          <div class="input-box">
            <span class="details">Mode of Payment</span>
            <Select  id="mode" name="mode" class="form-control" required>
                <option value="" selected="disabled">Select Payment Mode</option>
                <option value="Cash">Cash</option>
                <option value="M-pesa">M-pesa</option>
                <option value="Bank Deposit">Bank Deposit</option>
            </Select>
          </div>
          <div class="input-box">
            <label for="phone">Phone Number</label>
            <input name="contact" id="contact"type="tel" value="" placeholder="e.g 0712345678" class="form-control" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
          </div>
          <div class="input-box">
            <span class="details">Upload your Receipt Here</span>
            <input type="file" name="compfile" class="form-control" value="" required>
          </div>
        </div>
        <div class="input-box">
        <span class="details">Message</span>
		<textarea name="details" id="details" placeholder="Additional details!(optional)" class="form-control" style="height: 120px;"></textarea>
		</div>
        <div class="button">
          <input type="submit"  name="submit" class="btn btn-primary" value="Submit">
        </div>
      </form>
    </div>
  </div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>