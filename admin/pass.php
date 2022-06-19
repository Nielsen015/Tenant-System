<?php
include('security.php');


if(isset($_POST['pass'])) 
{
    $oldpassword = mysqli_real_escape_string($connection, $_POST['oldpassword']);
    $newpassword =  mysqli_real_escape_string($connection, $_POST['newpassword']);
    $cpassword =  mysqli_real_escape_string($connection, $_POST['repeatnewpassword']);
    

    $query = "SELECT password FROM register WHERE email='".$_SESSION['email']."'";
    $query_run = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($query_run);
    
    $oldpassworddb=$row['password'];
    if($oldpassworddb===$oldpassword)
    {
       if($newpassword===$cpassword)
        {
            $query = "UPDATE register SET password='$newpassword' WHERE email='".$_SESSION['email']."'";
            $query_run = mysqli_query($connection,$query);
        
            if($query_run)
            {
                     
                $_SESSION['status'] = "Password changed Successfully";
                $_SESSION['status_code'] = "success";
                header('location: profile.php');
            }
            else
            {
                $_SESSION['status'] = "An error was encounter, Please contact admin";
                $_SESSION['status_code'] = "error";
                header('location: profile.php');
            }
        }
        else 
        {
            $_SESSION['status'] = "password and confirm New password Does Not March";
            $_SESSION['status_code'] = "warning";
            header('location: profile.php');
        }
     
        }
        else 
        {
            $_SESSION['status'] = "Old password Does Not Match our records";
            $_SESSION['status_code'] = "warning";
            header('location: profile.php');
        }
     }

    
?>