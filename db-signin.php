<?php
include 'connectdb.php';
        $username = $_POST['login-form-username'];
        $password = md5($_POST['login-form-password']);
	    $query_password = "SELECT id FROM register WHERE username = '$username' AND password = '$password'";
	    $result = mysqli_query($conn,$query_password);
        $query_password_admin = "SELECT id FROM register WHERE username = 'badri' AND password = '$password'";
        $result_admin = mysqli_query($conn,$query_password_admin);

        if(mysqli_num_rows($result_admin)==1)
        {
            $_SESSION["username"] = $username;
            $row = mysqli_fetch_assoc($result);                         
            header("Location: adminpage.php");
        }
        else if(mysqli_num_rows($result)==1)
        {
            $_SESSION["username"] = $username;
            $row = mysqli_fetch_assoc($result);				            
            header("Location: userpage.php");
        }
        else
            header("Location: sign.php");