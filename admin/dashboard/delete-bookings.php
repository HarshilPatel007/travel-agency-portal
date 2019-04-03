<?php

    session_start();
    
    if(isset($_SESSION['user_id']) && isset($_SESSION['name']) && isset($_SESSION['email'])){
        include_once '../includes/dbconnect.php';
    }else{
        header("Location: ../../404.php");
        exit();
    }

?>


<?php

    $idReq = $_REQUEST['id'];
    $UserReq = $_REQUEST['users'];
    

    if(isset($idReq) && isset($UserReq)){
        $query = "DELETE FROM pkg_request WHERE id=$idReq";

        if(mysqli_query($dbConnect,$query)){

            header("Location: view-destination.php");
        }else{
            echo mysql_error();
        }
    }else{
        header("Location: ../../404.php");
        exit();
    }

?>