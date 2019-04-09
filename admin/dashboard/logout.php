<?php

if(isset($_POST['logoutbtn'])){

    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);

    // session_destroy();

    header("Location: ../index.php");
    exit();

}else{
    header("Location: ../../404.php");
    exit();
}

?>