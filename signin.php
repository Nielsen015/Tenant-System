<?php
session_start();
include('database/dbconfig.php');
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>CADESONE | Login Page</title>
      <link rel="shortcut icon" href="/images/Clogo.jpg" type="image/icon type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="style0.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/home1.jpg);">
    <div id="sideNav">
                <nav>
                    <ul>
                    <li><a href="index.html">HOME</a></li>
                        <li><a href="aboutus.html">ABOUT US</a></li>
                        <li><a href="tenants.php">DASHBOARD</a></li>
                        <li><a href="gallery.html">GALLERY</a></li>
                        <li><a href="signup.php">REGISTER</a></li>
                        <li><a href="contactus.html">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
            <div id="menuBtn">
                <img src="images/menu.png" id="menu" alt="">
            </div>
	<section class="ftco-section">
    <img src="images/Clogo.jpg" class="circular--square" alt="logo">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome to CADESONE Housing</h2>
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
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form  action="signincode.php" method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login_btn" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
                    <div class="w-50 text-md-left">
									<a href="signup.php" style="color: #fff">Create Account</a>
								</div>
								</div>
								<div class="w-50 text-md-right">
									<a href="forgot-password.php" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

		
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