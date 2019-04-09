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


$Error = '<br><br><div class="alert alert-info" role="alert">Field can\'t be empty.</div>';
$Success = '<br><br><div class="alert alert-success" role="alert">Data inserted Sucessfuly.</div>';
$Fail = '<br><br><div class="alert alert-danger" role="alert">There is an error occurred while inserting the data.</div>';
$imageError = '<br><br><div class="alert alert-info" role="alert">Only JPG, JPEG & PNG file types are allowed.</div>';

// If upload button is clicked ...
if(isset($_POST['upload'])){
	// Get image name
	$image = $_FILES['image']['name'];
	// Get text
	$image_text = mysqli_real_escape_string($dbConnect, $_POST['image_text']);
	// image file directory
	$target = "image/".basename($image);
	$allowed_image_extension = array("png","jpg","jpeg","PNG","JPG","JPEG");
	// Get image file extension
	$file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

	if(empty($image) || empty($image_text)){
		$response = array(
			"type" => "error",
			"message" => $Error
		);

	}elseif(!in_array($file_extension, $allowed_image_extension)){
		$response = array(
			"type" => "error",
			"message" => $imageError
		);

	}elseif(file_exists($target)){

		$random_digit = rand(000000000,999999999);
		$newImage = $random_digit."_".$image;
		$newTarget = "image/".basename($newImage);

			$sql = "INSERT INTO destinations (dest_image, dest_name) VALUES ('$newImage', '$image_text')";
			// execute query
			if(mysqli_query($dbConnect, $sql)){
				$response = array(
					"type" => "error",
					"message" => $Success
				);
			}else{
				$response = array(
					"type" => "error",
					"message" => $Fail
				);
			}
			if(move_uploaded_file($_FILES['image']['tmp_name'], $newTarget)){
				$response = array(
					"type" => "error",
					"message" => $Success
				);
			}else{
				$response = array(
					"type" => "error",
					"message" => $Fail
				);
			}

	}else{
		$sql = "INSERT INTO destinations (dest_image, dest_name) VALUES ('$image', '$image_text')";
		// execute query
		if(mysqli_query($dbConnect, $sql)){
			$response = array(
				"type" => "error",
				"message" => $Success
			);
		}else{
			$response = array(
				"type" => "error",
				"message" => $Fail
			);
		}
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$response = array(
				"type" => "error",
				"message" => $Success
			);
		}else{
			$response = array(
				"type" => "error",
				"message" => $Fail
			);
		}
	}
}

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

<h3>Add Destination</h3>

	<form action="add-destination.php" method="post" enctype="multipart/form-data">

		<div class="form-group row">
			<label for="image_text" class="col-sm-2 col-form-label">Destination Name :</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="image_text" id="image_text" placeholder="Enter Destination Name" value="<?php if(isset($image_text)) echo $image_text; ?>">
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

	<?php if(!empty($response)) { ?>
	<div class="response <?php echo $response["type"]; ?> ">
		<?php echo $response["message"]; ?>
	</div>
	<?php } ?>

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