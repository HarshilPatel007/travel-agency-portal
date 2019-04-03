<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <h3 href="#" class="navbar-brand"><?php echo $logo ?></h3>
    <ul class="nav justify-content-end">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="destinations.php">Destinations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      <?php

          session_start();

          if(isset($_SESSION['users_id']) && isset($_SESSION['users_name']) && isset($_SESSION['users_email'])){
              include_once '../includes/dbconnect.php';
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="dashboard.php">Dashboard</a>';
              echo '</li>';
          }else{

            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="./users/">Login/Register</a>';
            echo '</li>';
          }

      ?>
    </ul>
  </div>
</nav>