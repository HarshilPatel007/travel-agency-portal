<?php

    session_start();
    
    if(isset($_SESSION['users_id']) && isset($_SESSION['users_name']) && isset($_SESSION['users_email'])){
        include_once './admin/includes/dbconnect.php';
    }else{
        header("Location: 404.php");
        exit();
    }

?>


<?php

    $idReq = $_REQUEST['id'];
    $UserReq = $_REQUEST['users'];
    

    if(isset($idReq) && isset($UserReq)){
        $query = "DELETE FROM pkg_request WHERE id=$idReq";

        if(mysqli_query($dbConnect,$query)){

            header("Location: dashboard.php");
        }else{
            echo mysql_error();
        }
    }else{
        header("Location: ../../404.php");
        exit();
    }

?>