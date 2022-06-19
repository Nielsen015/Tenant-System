<?php
include('security.php'); 

if(isset($_POST['signupbtn'])) 
{
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $id_no = $_POST['id_no'];
    $house_no = $_POST['house_no'];
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    $cpassword = $_POST['confirmpassword'];

    
    $email_query = "SELECT * FROM users WHERE email='$email' ";
    $email_query_run = mysqli_query($connection,$email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "email already Taken, please pick another one";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    else {
      
    $username_query = "SELECT * FROM users WHERE username='$username' ";
    $username_query_run = mysqli_query($connection,$username_query);
    if(mysqli_num_rows($username_query_run) > 0)
    {
        $_SESSION['status'] = "Username already Taken, please try another one";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    else {
       
    $id_no_query = "SELECT id_no FROM tenants WHERE id_no='$id_no' AND last_name='$last_name' AND first_name='$first_name' ";
    $id_no_query_run = mysqli_query($connection,$id_no_query);
    $row = mysqli_fetch_assoc($id_no_query_run);
    
    $check_id=$row['id_no'];
    if($check_id!==$id_no)
    {
        $_SESSION['status'] = "ID Number Does not Match our Records";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    else
    {
         $house_no_query = "SELECT house_no FROM tenants WHERE id_no='$id_no' AND last_name='$last_name' AND first_name='$first_name' ";
    $house_no_query_run = mysqli_query($connection,$house_no_query);
    $row = mysqli_fetch_assoc($house_no_query_run);
    
    $check_house=$row['house_no'];
    if($check_house!==$house_no)
    {
        $_SESSION['status'] = "House Number Does not Match our Records";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    else
    {
        
         $first_name_query = "SELECT first_name FROM tenants WHERE id_no='$id_no' AND last_name='$last_name' AND house_no='$house_no' ";
    $first_name_query_run = mysqli_query($connection,$first_name_query);
    $row = mysqli_fetch_assoc($first_name_query_run);
    
    $check_first=$row['first_name'];
    if($check_first!==$first_name)
    {
        $_SESSION['status'] = "First Name Does not Match our Records";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    else
    {
        
     $last_name_query = "SELECT last_name FROM tenants WHERE id_no='$id_no' AND house_no='$house_no' AND first_name='$first_name' ";
    $last_name_query_run = mysqli_query($connection,$last_name_query);
    $row = mysqli_fetch_assoc($last_name_query_run);
    
    $check_last=mysqli_real_escape_string($connection,$row['last_name']);
    if($check_last!==$last_name)
    {
        $_SESSION['status'] = "Last Name Does not Match our Records";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    else
    {
          
    $id_no_query = "SELECT * FROM users WHERE id_no='$id_no' ";
    $id_no_query_run = mysqli_query($connection,$id_no_query);
    if(mysqli_num_rows($id_no_query_run) > 0)
    {
        $_SESSION['status'] = "ID Number, already exists";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
        
    else
    {
          
    $house_no_query = "SELECT * FROM users WHERE house_no='$house_no' ";
    $house_no_query_run = mysqli_query($connection,$house_no_query);
    if(mysqli_num_rows($house_no_query_run) > 0)
    {
        $_SESSION['status'] = "House Number Already Exists";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    

 
    else
     {

    if($password === $cpassword)
    {

   
        $query = "INSERT INTO users (first_name,last_name,username,id_no,house_no,email,password) VALUES('$first_name','$last_name','$username','$id_no','$house_no','$email','$password')";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run)
        {
      
            $_SESSION['state'] = "Registration Successful!! Sign in Here.";
            header('location: signin.php');
        }
        else
        {
            $_SESSION['status'] = 'Invalid Username or Password!!! Try again';
            $_SESSION['status_code'] = "warning";
            header('Location: signup.php');

        }
    }
    else 
        {
            $_SESSION['status'] = "password and confirm password Do Not March";
            $_SESSION['status_code'] = "warning";
            header('location: signup.php');
        }
    }
}
}
}
}
}
}
}
}
?>