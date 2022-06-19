<?php
session_start();
include('database/dbconfig.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CADESONE | Tenant Sign Up</title>
        <link rel="shortcut icon" href="/images/Clogo.jpg" type="image/icon type">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style2.css">
		<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bad+Script&family=Open+Sans:wght@300;400;600&family=Poppins:wght@700&family=Raleway:wght@200&family=Roboto:wght@100;300;500&family=Sacramento&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <link rel="stylesheet" href="style0.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
		<div id="sideNav">
                <nav>
                    <ul>
						<li><a href="index.html">HOME</a></li>
                        <li><a href="aboutus.html">ABOUT US</a></li>
                        <li><a href="tenants.php">DASHBOARD</a></li>
                        <li><a href="gallery.html">GALLERY</a></li>
                        <li><a href="signin.php">LOGIN</a></li>
                        <li><a href="contactus.html">CONTACT US</a></li>
                </nav>
            </div>
            <div id="menuBtn">
                <img src="images/menu.png" id="menu" alt="">
            </div>
			<div class="inner">
				<form class="user" action="registercode.php" method="POST">
					<h3>Tenant Registration Form</h3>
					 <?php
                                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                                    {
                                        echo '<h4 class="bg-danger text-white"> '.$_SESSION['status'].' </h4>';
                                        unset($_SESSION['status']);
                                    }
                                ?>
                                <?php
                        if(isset($_SESSION['state']) && $_SESSION['state'] !='') 
                        {
                            echo '<h4 class="bg-success text-white"> '.$_SESSION['state'].' </h4>';
                            unset($_SESSION['state']);
                        }
                    ?>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" name="first_name" class="form-control" placeholder="Enter Your First Name" required>
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" name="last_name" class="form-control" placeholder="Enter Your Last Name" required>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Enter Username for Login" required>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">ID No.</label>
							<input type="text" name="id_no" class="form-control" placeholder="Enter Your ID No." required>
						</div>
						<div class="form-wrapper">
							<label for="">Houses No.</label>
							<select id="house_no" name="house_no" class="form-control" required>
    <option value="" selected="selected" class="form-control">Click to Select House</option>
    <?php
    $query = "SELECT house_no FROM houses";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        echo "<option value='".$row['house_no']."'>".$row['house_no']."</option>";
    }

?>
</select>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control" placeholder="Enter Your email" required>
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" name="password"  class="form-control" placeholder="Type your Password" required>
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" required><a href="privacy.php" target="" style="color: #38B140;">I accept the Terms of Use & Privacy Policy.</a>
							<span class="checkmark" required></span>	</label>
					</div>
                    <div class="form-group">
					<button type="submit" name="signupbtn" class="btn btn-success float-right">Register Now</button>
					</div><br>
                    <div class="text-center">
                        <a class="small"  href="signin.php" style="color: #38B140;">Already have an account? Login!</a>
                    </div>
					</div>
				</form>
				 
			</div>
		</div>
</div>
</div>
		
		<script>
                var menuBtn =document.getElementById("menuBtn")
                var SideNav =document.getElementById("sideNav")
                var menu =document.getElementById("menu")
                sideNav.style.right = "-250px";
                menuBtn.onclick = function(){
                    if(SideNav.style.right == "-250px"){
                        SideNav.style.right = "0";
                        menu.src ="images/close.png";
                    }
                    else{
                        sideNav.style.right ="-250px"
                        menu.src ="images/menu.png";
                    }
                }
                var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 500,
	speedAsDuration: true
});
            </script>
</body>
</html>
<?php
include('includes/scripts.php');
?>