<?php include_once "includes/functions.php"; ?>
<?php include_once "./admin/includes/dbconnect.php" ?>


<?php
    $result = mysqli_query($dbConnect, "SELECT * FROM packages WHERE id='" .$_GET["pkgid"]. "' ");
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
    <h1 data-aos="fade-down" data-aos-duration="1500">Package Detail</h1>
  </div>
</div>

<div class="container-fluid">
    <div class="row my-3">
        <?php
            while($data=mysqli_fetch_array($result)){
        ?>

            <div class="col my-3">
                <div class="card">
                <?php echo "<img class='card-img-top' src='./admin/dashboard/pkgImage/".$data['pkg_thumbnail']."' width='294' height='500' alt='Destination Image'>"; ?>
                    <h6 class="text-muted my-2 mx-2">Package Name :</h6>
                    <h3 class="mx-2"><?php echo nl2br($data['pkg_name']);?></h3><br>

                    <h6 class="text-muted my-2 mx-2">Package Itinerary :</h6>
                    <p class="mx-2"><?php echo nl2br($data['pkg_itnry']);?></p><br>

                    <h6 class="text-muted my-2 mx-2"><i class="fa fa-check" aria-hidden="true"></i> Package Includes :</h6>
                    <p class="mx-2"><?php echo nl2br($data['pkg_include']); ?></p><br>

                    <h6 class="text-muted my-2 mx-2"><i class="fa fa-times" aria-hidden="true"></i> Package Excludes :</h6>
                    <p class="mx-2"><?php echo nl2br($data['pkg_exclude']);?></p>

                    <h6 class="text-muted my-2 mx-2"> Tour Duration :</h6>
                    <p class="mx-2"><?php echo nl2br($data['tour_duration']);?></p>

                    <h6 class="text-muted my-2 mx-2"> Package Price :</h6>
                    <p class="mx-2"><?php echo nl2br($data['tour_price']);?></p>

                    <?php
                        if(isset($_POST['bookbtn'])){

                            session_start();
                            
                            if(isset($_SESSION['users_id']) && isset($_SESSION['users_name']) && isset($_SESSION['users_email'])){
                                // header("Location: ../index.php");
                                echo "logged in as a ".$_SESSION['users_name'];

                                $userName1 = $_SESSION['users_name'];
                                $userID1 = $_SESSION['users_id'];
                                $pkgName1 = $data['pkg_name'];
                                $tourDays1 = $data['tour_duration'];

                                $Query1 = "INSERT INTO pkg_request (place_name, tour_days, users, users_id) VALUES ('".$pkgName1."', '".$tourDays1."', '".$userName1."', '".$userID1."')";

                                if(mysqli_query($dbConnect, $Query1)){

                                    echo '<script>alert("Package Booked Sucessfuly!")</script>';

                                }else{

                                    echo '<script>alert("Error!")</script>';

                                }


                        
                            }else{
                                // echo "please register to book!";
                                echo '<script>alert("please register first to book package.")</script>';

                            }
                        
                        }else{

                        }
                    ?>
                    <form action="" method="post">
                        <button type="submit" id="bookbtn" name="bookbtn" class="btn btn-primary my-2 mx-2">Book Package</button>
                    </form>
                </div>
            </div>

        <?php
            }
        ?>
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