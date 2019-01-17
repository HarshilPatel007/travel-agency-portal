<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <!-- <h3 href="#" class="navbar-brand">Travel Agency</h3> -->
    <a href="./index.php">Welcome <?php echo $_SESSION['name']; ?></a>
    <ul class="nav justify-content-end">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destinations</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="view-destination.php">View Destination</a>
          <a class="dropdown-item" href="add-destination.php">Add Destination</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Packages</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">View Packages</a>          
          <a class="dropdown-item" href="add-packages.php">Add Packages</a>
          <a class="dropdown-item" href="#">Edit Packages</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Delete Packages</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">View Gallery</a>
          <a class="dropdown-item" href="#">Add Gallery Image</a>
        </div>
      </li>

      <form class="form-inline" action="logout.php" method="post">
        <button class="btn btn-outline-dark" type="submit" name="logoutbtn">Logout</button>
      </form>

    </ul>
  </div>
</nav>