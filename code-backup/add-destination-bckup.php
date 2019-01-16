<?php
    session_start();
    
    if(isset($_SESSION['user_id']) && isset($_SESSION['name']) && isset($_SESSION['email'])){
        include_once '../includes/dbconnect.php';
    }else{
        header("Location: ../../404.php");
        exit();
    }
?>



<?php
  // If upload button is clicked ...
  if(isset($_POST['upload'])) {
	  // Get image name
	  $image = $_FILES['image']['name'];
	  // Get text
	  $image_text = mysqli_real_escape_string($dbConnect, $_POST['image_text']);
	  // image file directory
	  $target = "image/".basename($image);
	  $allowed_image_extension = array("png","jpg","jpeg");
	  // Get image file extension
	  $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
	  if(!in_array($file_extension, $allowed_image_extension)){
		  echo "<script>alert('Only PNG, JPG & JPEG file type allowed.')</script>";
		  header("Location: add-destination.php");
		  exit();
	  }else{
			$sql = "INSERT INTO destinations (dest_image, dest_name) VALUES ('$image', '$image_text')";
			// execute query
			if(mysqli_query($dbConnect, $sql)){
                echo "<script>alert('Image is uploaded successfuly.')</script>";
			}else{
				echo "<script>alert('There is an error accoured while uploading an image.')</script>";
			}
			
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
				echo "<script>alert('Image is uploaded successfuly.')</script>";
			}else{
				echo "<script>alert('There is an error accoured while uploading an image.')</script>";
			}
	  }
  }
  $result = mysqli_query($dbConnect, "SELECT dest_image,dest_name FROM destinations");
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
    <title>Admin Dashboard</title>
</head>



<body>

<!-- Start-Navigationbar -->
<?php include_once "navigation-bar.php"; ?>
<!-- End-Navigationbar -->




<div class="container p-5">

	<form action="add-destination.php" method="post" enctype="multipart/form-data">

		<div class="form-group row">
			<label for="image_text" class="col-sm-2 col-form-label">Destination Name :</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="image_text" id="image_text" placeholder="Enter Destination Name">
			</div>
		</div>

		<div class="form-group row">
			<label for="image" class="col-sm-2 col-form-label">Destination Image :</label>
			<div class="col-sm-10">
				<input type="file" class="form-control-file" name="image" id="image" onchange="preview_image(event)" accept="image/x-png,image/jpg,image/jpeg">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-10">
				<img id="output_image" width="400" height="300" alt="Image Preview">
			</div>
		</div>
		
		<button type="submit" class="btn btn-primary" name="upload">Submit</button>

	</form>

</div>




<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>

<script type='text/javascript'>
function preview_image(event){
	var reader = new FileReader();
	reader.onload = function(){
		var output = document.getElementById('output_image');
		output.src = reader.result;
 	}
	reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>

</html>