<?php

if(isset($_POST['logoutbtn1'])){
    session_start();
    unset($_SESSION['users_id']);
    unset($_SESSION['users_name']);
    unset($_SESSION['users_email']);

    // session_destroy();

    header("Location: ../../index.php");
    exit();

}else{
    header("Location: ../../404.php");
    exit();
}

?>