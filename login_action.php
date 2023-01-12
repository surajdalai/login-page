<?php
session_start();
include('include/connect.php');

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);

    $sql = "SELECT * FROM `admin_login` WHERE `username`='$username'";
    $check_email = mysqli_query($connect,$sql);
    if ( mysqli_num_rows($check_email)==1){
        
        $query = "SELECT * FROM `admin_login` WHERE `password`='$password'";
        $check_password = mysqli_query($connect,$query);

        if (mysqli_num_rows($check_password)==1){
            
            $_SESSION['login']='true';
            header("location:index.php");
        }
        else{
            $_SESSION['wrongpasword']=true;
            header("location:login.php");
        }
    }
    else{
        $_SESSION['wronguser']=true;
        header("location:login.php");
    }
}


?>