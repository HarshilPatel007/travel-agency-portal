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
    $imageReq = $_REQUEST['image'];
    

    if(isset($idReq) && isset($imageReq)){
        $query = "DELETE FROM destinations WHERE dest_id=$idReq";

        if(mysqli_query($dbConnect,$query)){
            $target = "image/".basename($imageReq);
            unlink($target);
            header("Location: view-destination.php");
        }else{
            echo mysqli_error();
        }
    }else{
        header("Location: ../../404.php");
        exit();
    }

?>