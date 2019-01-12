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


$result = mysqli_query($dbConnect, "SELECT dest_id,dest_name,dest_image FROM destinations");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/bootstrap.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Charm|Dosis|ZCOOL+XiaoWei|Thasadith|Montserrat|Oswald" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>View Destination | Admin Dashboard</title>
</head>



<body>

<!-- Start-Navigationbar -->
<?php include_once "navigation-bar.php"; ?>
<!-- End-Navigationbar -->




<div class="container p-5">

<h3>View Destination</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Destination Name</th>
      <th scope="col">Destination Image</th>
    </tr>
  </thead>
  <tbody>

  <?php
    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<th scope='row'>".$row['dest_id']."</th>";
        echo "<td>".$row['dest_name']."</td>";
        echo "<td><img src='image/".$row['dest_image']."' width='300' height='150' alt='Destination Image'></td>";
    }
  ?>
    </tr>
  </tbody>
</table>



</div>




<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>

<script type='text/javascript'>

function preview_image(event){
	var reader = new FileReader();
	reader.onload = function(){
		var output = document.getElementById('output_image');
		output.src = reader.result;
 	}
	reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>

</html>