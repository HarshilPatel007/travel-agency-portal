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
	// Get images name
	$pkg_thumbnail = $_FILES['pkg_thumbnail']['name'];

	// Get values from textbox and textarea.
	$pkg_name = mysqli_real_escape_string($dbConnect, $_POST['pkg_name']);
	$destination_name = mysqli_real_escape_string($dbConnect, $_POST['destination_name']);
	$pkg_duration = mysqli_real_escape_string($dbConnect, $_POST['pkg_duration']);
	$pkg_price = mysqli_real_escape_string($dbConnect, $_POST['pkg_price']);
	$pkg_itinerary = mysqli_real_escape_string($dbConnect, $_POST['pkg_itinerary']);
	$pkg_includes =  mysqli_real_escape_string($dbConnect, $_POST['pkg_includes']);
	$pkg_excludes =  mysqli_real_escape_string($dbConnect, $_POST['pkg_excludes']);


	// image file directory
	$target = "pkgImage/".basename($pkg_thumbnail);


	$allowed_image_extension = array("png","jpg","jpeg","PNG","JPG","JPEG");

	// Get image file extension
	$file_extension = pathinfo($_FILES['pkg_thumbnail']['name'], PATHINFO_EXTENSION);


// empty($pkg_thumbnail) || empty($pkg_image1) || empty($pkg_image2) || empty($pkg_image3) || empty($pkg_name) || empty($pkg_duration) || empty($pkg_price) || empty($pkg_itinerary) || empty($pkg_includes) || empty($pkg_excludes)
	if( empty($pkg_thumbnail) || empty($pkg_name) || empty($pkg_duration) || empty($pkg_price) || empty($pkg_itinerary) || empty($pkg_includes) || empty($pkg_excludes) ){
		$response = array(
			"type" => "error",
			"message" => $Error
		);
// or !in_array($file_extension1, $allowed_image_extension) or !in_array($file_extension2, $allowed_image_extension) or !in_array($file_extension3, $allowed_image_extension)
	}elseif(!in_array($file_extension, $allowed_image_extension)){
		$response = array(
			"type" => "error",
			"message" => $imageError
		);

	}elseif(file_exists($target)){

		$random_digit = rand(000000000,999999999);

		$newImage = $random_digit."_".$pkg_thumbnail;

		$newTarget = "pkgImage/".basename($newImage);


			$sql = "INSERT INTO packages (dest_ID, pkg_name, pkg_thumbnail, tour_duration, tour_price, pkg_itnry, pkg_include, pkg_exclude) VALUES ('$destination_name', '$pkg_name', '$newImage', '$pkg_duration', '$pkg_price', '$pkg_itinerary', '$pkg_includes', '$pkg_excludes')";
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
			if(move_uploaded_file($_FILES['pkg_thumbnail']['tmp_name'], $newTarget)){
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
		$sql = "INSERT INTO packages (dest_ID, pkg_name, pkg_thumbnail, tour_duration, tour_price, pkg_itnry, pkg_include, pkg_exclude) VALUES ('$destination_name', '$pkg_name', '$pkg_thumbnail', '$pkg_duration', '$pkg_price', '$pkg_itinerary', '$pkg_includes', '$pkg_excludes')";
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
		if(move_uploaded_file($_FILES['pkg_thumbnail']['tmp_name'], $target)){
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
    <title>Add Package | Admin Dashboard</title>
</head>



<body>

<!-- Start-Navigationbar -->
<?php include_once "navigation-bar.php"; ?>
<!-- End-Navigationbar -->



<div class="container p-5">

<h3>Add Packages</h3>

	<form action="add-package.php" method="post" enctype="multipart/form-data">

		<div class="form-group row">
			<label for="pkg_name" class="col-sm-2 col-form-label">Package Name :</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="pkg_name" id="pkg_name" placeholder="Enter Package Name" value="<?php if(isset($pkg_name)) echo $pkg_name; ?>">
			</div>
		</div>

		<div class="form-group row">
			<label for="destination_name" class="col-sm-2 col-form-label">Select Destination Name :</label>
			<div class="col-sm-10">
				<select class="form-control" name="destination_name" id="destination_name"><option value="">Select</option>
				<?php
					$result = mysqli_query($dbConnect, "SELECT dest_id,dest_name FROM destinations ORDER BY dest_id desc");
					$r=mysqli_num_rows($result);

					while($data=mysqli_fetch_array($result)){	
							echo "<option value=$data[0]>$data[1]</option>";
					}
				?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="pkg_thumbnail" class="col-sm-2 col-form-label">Package Thumbnail :</label>
			<div class="col-sm-4">
				<input type="file" class="form-control-file" name="pkg_thumbnail" id="pkg_thumbnail" onchange="preview_image(event)" accept="image/x-png,image/jpg,image/jpeg">
			</div>

			<div class="col-sm-6">
				<img id="output_image" width="400" height="300" alt="Image Preview">
			</div>
		</div>

		<div class="form-group row">
			<label for="pkg_duration" class="col-sm-2 col-form-label">Tour Duration :</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="pkg_duration" id="pkg_duration" placeholder="Enter Tour Duration" value="<?php if(isset($pkg_duration)) echo $pkg_duration; ?>">
			</div>

			<label for="pkg_price" class="col-sm-2 col-form-label">Tour Price :</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="pkg_price" id="pkg_price" placeholder="Enter Tour Price" value="<?php if(isset($pkg_price)) echo $pkg_price; ?>">
			</div>
		</div>

		<div class="form-group row">
			<label for="pkg_itinerary" class="col-sm-2 col-form-label">Package Itinerary:</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="pkg_itinerary" id="pkg_itinerary" rows="3" style="white-space: pre-wrap;"></textarea>
			</div>
		</div>

		<div class="form-group row">
			<label for="pkg_includes" class="col-sm-2 col-form-label">Package Includes:</label>
			<div class="col-sm-4">
				<textarea class="form-control" name="pkg_includes" id="pkg_includes" rows="3" style="white-space: pre-wrap;"></textarea>
			</div>

			<label for="pkg_excludes" class="col-sm-2 col-form-label">Package Excludes:</label>
			<div class="col-sm-4">
				<textarea class="form-control" name="pkg_excludes" id="pkg_excludes" rows="3" style="white-space: pre-wrap;"></textarea>
			</div>
		</div>

		<!-- <div class="form-group row">
			<label for="pkg_image1" class="col-sm-2 col-form-label">Package Image-1 :</label>
			<div class="col-sm-4">
				<input type="file" class="form-control-file" name="pkg_image1" id="pkg_image1" accept="image/x-png,image/jpg,image/jpeg">
			</div>
		</div>

		<div class="form-group row">
			<label for="pkg_image2" class="col-sm-2 col-form-label">Package Image-2 :</label>
			<div class="col-sm-4">
				<input type="file" class="form-control-file" name="pkg_image2" id="pkg_image3" accept="image/x-png,image/jpg,image/jpeg">
			</div>
		</div>

		<div class="form-group row">
			<label for="pkg_image3" class="col-sm-2 col-form-label">Package Image-3 :</label>
			<div class="col-sm-4">
				<input type="file" class="form-control-file" name="pkg_image3" id="pkg_image3" accept="image/x-png,image/jpg,image/jpeg">
			</div>
		</div> -->


		
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