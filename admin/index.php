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
    <title>Admin | Travel Agency Portal</title>
</head>

<body>


<div class="container">
    <h1 class="text-center">Travel Agency Portal</h1>
    <div class="container pt-3">
    <div class="row justify-content-sm-center">
        <div class="col-sm-6 col-md-4">
        <div class="card border-info text-center">
            <div class="card-header">
            Login to continue
            </div>
            <div class="card-body">
            <i class="far fa-user-circle fa-5x"></i><br><br>
            <form class="form-signin" action="includes/login.php" method="post">
                <input type="text" name="username" class="form-control mb-2" placeholder="Username" required autofocus>
                <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
                <button type="submit" name="loginbtn" class="btn btn-lg btn-primary btn-block mb-1">Login</button>
                <!-- <label class="checkbox float-left">
                <input type="checkbox" value="remember-me">
                Remember me
                </label> -->
                <!-- <a href="#" class="float-right">Need help?</a> -->
            </form>
            </div>
        </div>
        <!-- <a href="#" class="float-right">Create an account </a> -->
        </div>
    </div>
    </div>
</div>






<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>