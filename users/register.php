<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>User Register</title>
</head>
<body>
<h1 class="text-center">Travel Agency Portal</h1>
    <div class="container pt-3">
    <div class="row justify-content-sm-center">
        <div class="col-sm-6 col-md-4">
        <div class="card border-info text-center">
            <div class="card-header">
            Register for Users
            </div>
            <div class="card-body">
            <i class="far fa-user-circle fa-5x"></i><br><br>
            <form class="form-signin" action="includes/register.php" method="post">
                <input type="text" name="fullname" class="form-control mb-2" placeholder="Full name" required autofocus>
                <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>                
                <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
                <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
                <button type="submit" name="registerbtn" class="btn btn-lg btn-primary btn-block mb-1">Register</button>
            </form>
            </div>
        </div>
        <p>Already have an account? <a href="index.php" class="float-right">Login here </a></p>
        </div>
    </div>
    </div>









<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>