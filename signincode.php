<?php
include('security.php');

if(isset($_POST['login_btn']))
{
    $username_login = mysqli_real_escape_string($connection,$_POST['username']);
    $password_login = mysqli_real_escape_string($connection,$_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username_login' AND password='$password_login' LIMIT 1 ";
    $query_run =mysqli_query($connection,$query);

    if(mysqli_fetch_array($query_run))
    {
        
        $_SESSION['username'] = $username_login;
        $_SESSION['id']=$num['id'];
        header('Location: tenants.php');

    }
    else
    {
        $_SESSION['status'] = 'Invalid Username or Password!!! Try again';
          $_SESSION['status_code'] = "warning";
        header('Location: signin.php');

    }

}
?>

