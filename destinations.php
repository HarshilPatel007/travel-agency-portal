<?php include_once "includes/functions.php"; ?>
<?php include_once "./admin/includes/dbconnect.php" ?>


<?php
    $result = mysqli_query($dbConnect, "SELECT dest_id,dest_name,dest_image FROM destinations ORDER BY dest_id desc");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/animate.css">
  <link rel="stylesheet" href="styles/bootstrap.css">
  <link rel="stylesheet" href="styles/aos.css">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Charm|Dosis|ZCOOL+XiaoWei|Thasadith|Montserrat|Oswald" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <title><?php echo $title ?></title>
</head>

<body>

<!-- Start-Navigationbar -->
<?php include_once "includes/navigation-bar.php"; ?>
<!-- End-Navigationbar -->






<div id="destination-image">
  <div class="overlay"></div>
  <div class="text-center text-align-middle">
    <h1 data-aos="fade-down" data-aos-duration="1500">Destinations</h1>
  </div>
</div>

<div class="container-fluid">
  <div class="row my-5">

        <?php
            $count=1;
            while ($row = mysqli_fetch_array($result)){
        ?>
        <div class="col my-3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
            <div class="card p-1 bg-light text-white" style="width: 19rem;">
                <?php echo "<img class='card-img-top' src='./admin/dashboard/image/".$row['dest_image']."' width='294' height='200' alt='Destination Image'>"; ?>
                <div class="card-img-overlay card-overlay">
                <div class="my-4 card-body text-center">
                    <?php echo "<h5 class='card-title' id='card-title'>".$row['dest_name']."</h5>"; ?>
                    <a href="#" class="btn btn-outline-warning">Show Packages</a>
                </div>
                </div>
            </div>
        </div>
        <?php $count++; } ?>

    </div>
</div>



<!-- Start-Footer -->
<?php include_once "includes/footer.php"; ?>
<!-- End-Footer -->






<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>