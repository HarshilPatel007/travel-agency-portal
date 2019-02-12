<?php

session_start();

if(isset($_POST['loginbtn'])){

    include_once 'dbconnect.php';

    $username = mysqli_real_escape_string($dbConnect, $_POST['username']);
    $password = mysqli_real_escape_string($dbConnect, $_POST['password']);

    if(empty($username) || empty($password)){
        header("Location: ../index.php?login=field_is_empty");
        exit();
    }else{
        $query = "SELECT * FROM users WHERE users_username='$username'";
        $result = mysqli_query($dbConnect, $query);
        $CheckResult = mysqli_num_rows($result);

        if($CheckResult < 1){
            header("Location: ../index.php?login=invalid_username");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                $hashedpwdCheck = password_verify($password, $row['users_password']);
                
                if($hashedpwdCheck == false){
                    header("Location: ../index.php?login=invalid_password");
                    exit();
                }elseif ($hashedpwdCheck == true){

                    $_SESSION['users_id'] = $row['id'];
                    $_SESSION['users_name'] = $row['users_fullname'];
                    $_SESSION['users_email'] = $row['users_email'];
                    //header("Location: ../index.php?login=success");
                    header("Location: ../index.php");
                    exit();
                }
            }
        }
    }

}else{
    header("Location: ../../404.php");
    exit();
}

?>