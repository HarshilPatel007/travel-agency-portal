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
        $query = "SELECT * FROM admins WHERE admin_username='$username'";
        $result = mysqli_query($dbConnect, $query);
        $CheckResult = mysqli_num_rows($result);

        if($CheckResult < 1){
            header("Location: ../index.php?login=invalid_username");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                $hashedpwdCheck = password_verify($password, $row['admin_password']);
                
                if($hashedpwdCheck == false){
                    header("Location: ../index.php?login=invalid_password");
                    exit();
                }elseif ($hashedpwdCheck == true){

                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['name'] = $row['admin_fullname'];
                    $_SESSION['email'] = $row['admin_email'];
                    //header("Location: ../index.php?login=success");
                    header("Location: ../dashboard/index.php");
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