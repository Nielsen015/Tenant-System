<?php
include('security.php');

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1 ";
    $query_run =mysqli_query($connection,$query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['email'] = $email_login;
        header('Location: index.php');

    }
    else
    {
        $_SESSION['status'] = 'Invalid Email or Password!!! Try again';
        header('Location: login.php');

    }

}
?>

