<?php
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}
.header {
  padding: 10px 16px;
  background: #888;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
</head>
<body style="background-color:#ff9933;">

<div class="top-container">
  <h1>Scroll Down to read our private policy</h1>
  
</div>
<div class="header" id="myHeader">
  <h2>Private policy</h2>
</div>

<div class="content">
  
  <h1>
Private policy
</h1>

<p> 
<a href="signup.php" onclick="history.back()">BACK TO SIGN UP PAGE</a>



</p>

<p> 

Cadeson Housing takes your privacy seriously. This privacy policy describes what personal information we collect and how we use it.<br> 

<h2>Routine Information Collection</h2>
All web servers track basic information about their visitors. This information includes, but is not limited to, IP addresses, browser details, timestamps and referring pages. None of this information can personally identify specific visitors to this site. The information is tracked for routine administration and maintenance purposes.<br> 

<h2> Cookies and Web Beacons</h2>
Where necessary, Cadeson Housing uses cookies to store information about a visitor’s preferences and history in order to better serve the visitor and present the visitor with customized content.
Advertising partners and other third parties may also use cookies, scripts and web beacons to track visitors to our site in order to display advertisements and other useful information. Such tracking is done directly by the third parties through their own servers and is subject to their own privacy policies.<br> 

<h2> Controlling Your Privacy</h2>
Note that you can change your browser settings to disable cookies if you have privacy concerns. Disabling cookies for all sites is not recommended as it may interfere with your use of some sites. The best option is to disable or enable cookies on a per-site basis. Consult your browser documentation for instructions on how to block cookies and other tracking mechanisms. <br>



<h2>Contact Information</h2>
For any questions or concerns regarding the privacy policy, please send us an email to [[EMAIL ADDRESS]]
</p>
</div>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
    }
}
</script>
<script>function GoBackWithRefresh(event) {
    if ('referrer' in document) {
        window.location = document.referrer;
        /* OR */
        //location.replace(document.referrer);
    } else {
        window.history.back();
    }
}</script>

</body>
</html>