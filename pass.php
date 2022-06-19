<?php
include('security.php');
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['pass'])) 
{
    $oldpassword = mysqli_real_escape_string($connection, $_POST['oldpassword']);
    $newpassword =  mysqli_real_escape_string($connection, $_POST['newpassword']);
    $cpassword =  mysqli_real_escape_string($connection, $_POST['repeatnewpassword']);
    

    $query = "SELECT password FROM users WHERE username='".$_SESSION['username']."'";
    $query_run = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($query_run);
    
    $oldpassworddb=$row['password'];
    if($oldpassworddb===$oldpassword)
    {
       if($newpassword===$cpassword)
        {
            $query = "UPDATE users SET password='$newpassword' WHERE username='".$_SESSION['username']."'";
            $query_run = mysqli_query($connection,$query);
        
            if($query_run)
            {
                     
                $_SESSION['status'] = "Passowrd changed Successfully";
                $_SESSION['status_code'] = "success";
                header('location: tenants.php');
            }
            else
            {
                $_SESSION['status'] = "An error was encounter, Please contact admin";
                $_SESSION['status_code'] = "error";
                header('location: password.php');
            }
        }
        else 
        {
            $_SESSION['status'] = "password and confirm New password Does Not March";
            $_SESSION['status_code'] = "warning";
            header('location: password.php');
        }
     
        }
        else 
        {
            $_SESSION['status'] = "Old password Does Not Match our records";
            $_SESSION['status_code'] = "warning";
            header('location: password.php');
        }
     }

    
?>