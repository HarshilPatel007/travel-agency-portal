<?php

    session_start();
    
    if(isset($_SESSION['user_id']) && isset($_SESSION['name']) && isset($_SESSION['email'])){
        include_once 'includes/dbconnect.php';
        // echo $_SESSION['user_id'];

    }else{
        header("Location: ../../404.php");
        exit();
    }

?>


<?php

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submitbtn"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = "INSERT into destinations(dest_name, dest_image, uploaded) VALUES ('$DestinationName', '".$fileName."', NOW())";
            $query = mysqli_execute($dbConnect, $insert);
            if($query){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG & PNG files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
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
    <title>Add Destination | Admin Dashboard</title>
</head>



<body>

<!-- Start-Navigationbar -->
<?php include_once "navigation-bar.php"; ?>
<!-- End-Navigationbar -->

<div class="container p-5">

<form action="add-destination.php" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="DestinationName" class="col-sm-2 col-form-label">Destination Name :</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="DestinationName" placeholder="Enter Destination Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="DestinationImage" class="col-sm-2 col-form-label">Destination Image :</label>
    <div class="col-sm-10">
        <input type="file" class="form-control-file" name="file">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submitbtn">Submit</button>
</form>

</div>



<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>
</body>
</html>