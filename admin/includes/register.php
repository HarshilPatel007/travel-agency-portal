<?php

//if(isset($_POST['registerbtn'])){

    include_once 'dbconnect.php';

    $fullname = mysqli_real_escape_string($dbConnect, $_POST['fullname']);
    $email = mysqli_real_escape_string($dbConnect, $_POST['email']);
    $username = mysqli_real_escape_string($dbConnect, $_POST['username']);
    $password = mysqli_real_escape_string($dbConnect, $_POST['password']);

    if(empty($fullname) || empty($email) || empty($username) || empty($password)){
        //echo "<script>alert('Field Is Empty')</script>";
        header("Location: ../register.php?register=field_is_empty");
        exit();
    }else{
        if(!preg_match("/^[a-zA-Z \s]*$/", $fullname)){
            header("Location: ../register.php?register=invalid");
            exit();
        }else{
            $query = "SELECT * FROM admins WHERE admin_email='$email'";
            $result = mysqli_query($dbConnect, $query);
            $CheckResult = mysqli_num_rows($result);

            if($CheckResult > 0 && !filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../register.php?register=invalid_email_OR_email_exist");
                exit();
            }else{
                $query = "SELECT * FROM admins WHERE admin_name='$username'";
                $result = mysqli_query($dbConnect, $query);
                $CheckResult = mysqli_num_rows($result);

                if($CheckResult > 0){
                    header("Location: ../register.php?register=username_exist");
                    exit();
                }else{
                    //require 1 uppercase letter, 1 lowercase latter and 1 number or special character.
                    if($fullname == $password && $email == $password && $username == $password && !preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $password)){
                        header("Location: ../register.php?register=password_error");
                        exit();
                    }else{
                        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                        $query = "INSERT INTO admins (admin_fullname, admin_email, admin_username, admin_password) VALUES ('$fullname', '$email', '$username', '$hashedpwd');";
                        mysqli_query($dbConnect, $query);
                        header("Location: ../index.php?register=success");
                        exit();
                    }
                }
            }
        }
    }

// }else{
//     header("Location: ../../404.php");
//     exit();
// }

?>