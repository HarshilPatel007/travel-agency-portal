<?php

    session_start();
    
    if(isset($_SESSION['user_id']) && isset($_SESSION['name']) && isset($_SESSION['email'])){
        include_once 'dbconnect.php';
        // echo $_SESSION['user_id'];

    }else{
        header("Location: ../../404.php");
        exit();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Admin Dashboard</title>
</head>



<body>
    

<h3> User ID  : <?php echo $_SESSION['user_id']; ?> </h3></br>
<h3> Username : <?php echo $_SESSION['name']; ?> </h3></br>
<h3> Email ID : <?php echo $_SESSION['email']; ?> </h3></br>


<form id="logoutform" action="logout.php" method="post">
<button type="submit" name="logoutbtn" class="btn btn-lg btn-primary btn-block mb-1">Logout</button>
</form>




<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>
</body>
</html>