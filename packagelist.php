<?php include_once "includes/functions.php"; ?>
<?php include_once "./admin/includes/dbconnect.php" ?>


<?php
    $result = mysqli_query($dbConnect, "SELECT * FROM packages WHERE dest_ID='" .$_GET["destid"]. "' ");
    $row = mysqli_num_rows($result);
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
    <h1 data-aos="fade-down" data-aos-duration="1500">Packages</h1>
  </div>
</div>

<div class="container-fluid">
    <?php
        while($data=mysqli_fetch_array($result)){
    ?>
    <h5>Package Title : </h5><h1><?php echo nl2br($data['pkg_itnry']); ?></h1><br>
    <?php
        }
    ?>
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