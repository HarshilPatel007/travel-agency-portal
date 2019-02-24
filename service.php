<?php include_once "includes/functions.php"; ?>




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


<!-- Start-Image (Carousel) -->
<div id="destination-image">
  <div class="overlay"></div>
  <div class="text-center text-align-middle">
    <h1 data-aos="fade-down" data-aos-duration="1500">Services</h1>
  </div>
</div>
<!-- End-Image (Carousel) -->

<!-- Start-Service Section-->
<div class="container-fluid">
    <div class="row my-4">

      <div class="col-xs-12 col-sm-6 col-md-3 my-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
          <h1 class="text-center little-words">Air Ticket</h1>
          <h6 class="text-justify text-muted">Cheap Flights and Discounted Airfares.With our global strength and buying power, we are able to offer our customers the best prices on flights and airfares to all over the world. We are among the most prestigious ventures that offers the most lucrative and customer friendly flight deals to travel across the globe. With a fantastic wealth of airlines associated with us, we offer a forthright variety of flight tickets.</h6>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 my-4" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <h1 class="text-center little-words">Visa & Passport</h1>
          <h6 class="text-justify text-muted">We started Visa and Passport service with the goal of eliminating the time, hassle and frustration associated with getting a new passport or visa. From the moment we opened our doors we have dedicated ourselves to providing our customers with their travel documents in as little as 24 hours. Our Objective is helping individuals to expedite passports and visas.</h6>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 my-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
          <h1 class="text-center little-words">Hotel Booking</h1>
          <h6 class="text-justify text-muted">Amongst the hundreds and thousands of hotels around the world, we help you to get the best options for your stay. Let it be your unforgettable Honeymoon or a long awaited accommodation in a dream land or could be just looking for a bed to lay your head, it's all flexible and at an amazing price to suit your budget.</h6>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 my-4" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <h1 class="text-center little-words">Travel Insurance</h1>
          <h6 class="text-justify text-muted">We offers trip insurance that takes the stress out of traveling by protecting your trip investment. Unforeseen events and emergencies can arise at any time, even while you’re on vacation, resulting in non-refundable trip expenses that may cost you. Trip insurance covers fees such as Medical fees, death cover, Loss of baggage or misplacement of baggage and hijack.</h6>
      </div>

    </div>

    <div>
      <h1 class="text-center little-words" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Customized Tour Package</h1>
      <h6 class="text-center text-muted" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">We are happy to say that, we also offer a fully customized tour according to your choice and need. <br><br> Please feel this form as per your need to tell us your choice. <br><br><b>Note:</b> Please register and login before feeling the form.</h6>




      <?php
        if (isset($_POST['sbmtbtn'])) {
          session_start();

          if(isset($_SESSION['users_id']) && isset($_SESSION['users_name']) && isset($_SESSION['users_email'])){
            echo "logged in";
          }else{
              // echo "please register to book!";
              echo '<script>alert("please register first to send customized package details.")</script>';
          }
        }else{

        }
      ?>
      <form action="" method="POST">
        <div class="container my-4" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <div class="form-group">
            <label for="exampleInputEmail1">Where you want to go?</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Number of person?</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter here">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Number of days?</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter here">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Any other requirments?</label>
            <textarea class="form-control" name="pkg_excludes" id="pkg_excludes" rows="3" style="white-space: pre-wrap;"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="sbmtbtn">Submit</button>
        </div>
      </form>
    
    </div>
</div>
<!-- End-Service Section-->

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