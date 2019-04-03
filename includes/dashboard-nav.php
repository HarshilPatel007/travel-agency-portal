<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <ul class="nav justify-content-end">

    <form class="form-inline" action="users/includes/logout.php" method="post">
        <button class="btn btn-outline-dark" type="submit" name="logoutbtn1">Logout</button>
    </form>
      <?php

          session_start();

          if(isset($_SESSION['users_id']) && isset($_SESSION['users_name']) && isset($_SESSION['users_email'])){
              include_once '../includes/dbconnect.php';
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="./index.php">Home</a>';
              echo '</li>';
          }else{
          }

      ?>
    </ul>
  </div>
</nav>