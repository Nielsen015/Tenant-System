<?php
include('security.php'); 



if(isset($_POST['submit']))
{
$user_id=$_SESSION['id'];
$subject=mysqli_real_escape_string($connection,$_POST['subject']);
$messages=mysqli_real_escape_string($connection,$_POST['messages']);


$query= "INSERT INTO messages(user_id,subject,messages) values('$user_id','$subject','$messages')";
$query_run = mysqli_query($connection,$query);
 
if($query_run)
{
    $_SESSION['status'] = "Message has been sent";
    $_SESSION['status_code'] = "success";
    header('Location: message.php');

}
else
{
    $_SESSION['status'] = "Error! cannot send message, please contact Admin";
    $_SESSION['status_code'] = "error";
    header('Location: message.php');


}
}
?>