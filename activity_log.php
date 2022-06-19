
<?php 
 
 // Include the security file 
 include_once 'security.php'; 
  
 // Get current page URL 
 $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://localhost/cadesone/"; 
 
 $user_current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
  
 // Get server related info 
 $user_ip_address = $_SERVER['REMOTE_ADDR']; 
 $referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
 $user_agent = $_SERVER['HTTP_USER_AGENT']; 
  
 // Insert visitor activity log into database 
 
 $sql = "INSERT INTO visitor_activity_logs (user_ip_address, page_url, created_on) VALUES ($user_ip_address,$user_current_url,NOW())"; 
 
  
 ?>
 