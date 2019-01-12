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

    $id = $_REQUEST['id'];

    $query = "DELETE FROM destinations WHERE dest_id=$id";

    $result = mysqli_query($dbConnect,$query) or die ( mysqli_error());

    header("Location: view-destination.php");

?>