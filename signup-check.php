<?php

session_start();

include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password'])){
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate ($_POST['uname']);
    $pass = validate ($_POST['password']);

    $name = validate ($_POST['name']);
    $re_pass = validate ($_POST['re_password']);

    $user_data = 'uname='. $uname. '&name='. $name;



    if(empty($uname)){
        header("location: signup.php?error=Username is required&$user_data");
        exit();
    }else if (empty($pass)){
        header("location: signup.php?error=Password is required&$user_data");
        exit();
    }else if (empty($name)){
        header("location: signup.php?error=Name is required&$user_data");
        exit();
    }else if (empty($re_pass)){
        header("location: signup.php?error=Retype-Password is required&$user_data");
        exit();
    } else if ($pass !== $re_pass){
        header("location: signup.php?error=The Confirmation Password does not match&$user_data");
        exit();
    }else{
        //hashing password
        $pass = md5($pass);
       
        $sql = "SELECT * FROM users WHERE user_name='$uname'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            header("Location: signup.php?error=The Username is already taken, try another&$user_data");
            exit();
        }else{
            $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            }else{
                header("Location: signup.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }
}else{
    header("location: signup.php?error");
    exit();
}
?>