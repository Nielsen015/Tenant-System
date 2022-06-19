<?php
session_start();
include('activity_log.php');
include('database/dbconfig.php');

date_default_timezone_set("Africa/Nairobi");
$currentTime = date( 'd-m-Y h:i:s A', time () );
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}

if(!$_SESSION['username'])
{
    $_SESSION['id']=$num['id'];
    header('Location: signin.php');
}
?>