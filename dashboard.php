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


$result = mysqli_query($dbConnect, "SELECT id, place_name, tour_days, users, users_id FROM pkg_request ORDER BY id desc");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Charm|Dosis|ZCOOL+XiaoWei|Thasadith|Montserrat|Oswald" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>User Dashboard</title>
</head>



<body>

<!-- Start-Navigationbar -->
<?php include_once "includes/dashboard-nav.php"; ?>
<!-- End-Navigationbar -->




<div class="container p-5">

    <h5>Welcome <?php echo $_SESSION['users_name'] ?></h5> <br>
    <h3>View Bookings</h3>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Package Name</th>
                <th scope="col">Tour Duration</th>
                <th scope="col">User</th>
                <th scope="col">User ID</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
        <?php
            $count=1;
            while ($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <?php echo "<th scope='row'>".$row['id']."</th>"; ?>
                <?php echo "<td>".$row['place_name']."</td>"; ?>
                <?php echo "<td>".$row['tour_days']."</td>"; ?>
                <?php echo "<td>".$row['users']."</td>"; ?>
                <?php echo "<td>".$row['users_id']."</td>"; ?>
                <td><a href="delete-bookings.php?id=<?php echo $row['id']; ?>&users=<?php echo $row['users_id']; ?>">Delete</a></td>
            </tr>
            <?php $count++; } ?>
        </tbody>
    </table>

</div>




<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>


</body>

</html>