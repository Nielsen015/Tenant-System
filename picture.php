<?php
include('security.php'); 



if(isset($_POST['submit']))
{
$tenant=$_SESSION['username'];
$compfile=$_FILES["compfile"]["name"];
$allowed = array('jpeg','jpg','png');



move_uploaded_file($_FILES["compfile"]["tmp_name"],"profile/".$_FILES["compfile"]["name"]);

$user_query = "SELECT * FROM profile WHERE tenant='$tenant' ";
$user_query_run = mysqli_query($connection,$user_query);
if(mysqli_num_rows($user_query_run) > 0)
{
    $query= "UPDATE profile SET compfile='$compfile' WHERE tenant='".$_SESSION['username']."'";
    $query_run = mysqli_query($connection,$query);
    
if($query_run)
{
    $_SESSION['status'] = "Picture has been Successfully uploaded";
    $_SESSION['status_code'] = "success";
    header('Location: profile.php');

}
else
{
    $_SESSION['status'] = "Error! cannot upload picture, please contact Admin";
    $_SESSION['status_code'] = "error";
    header('Location: profile.php');


}
}
else {
    $query = "INSERT INTO profile (tenant,compfile) VALUES('$tenant','$compfile')";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Picture has been Successfully uploaded";
        $_SESSION['status_code'] = "success";
        header('Location: profile.php');
    
    }
    else
    {
        $_SESSION['status'] = "Error! cannot upload picture, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: profile.php');
    
    
    }
}

}
?>