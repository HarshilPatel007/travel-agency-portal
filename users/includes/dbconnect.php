<?php

	$dbServerName = 'localhost';
	$dbUserName = 'root';
	$dbPassword = 'password';
	$dbName = 'travel_portal';
	$dbConnect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
	if(!$dbConnect){
		die("Can't able to connect to the database! :( <br><br><hr>". " Error No. : " . mysqli_connect_errno() ."<br><br>" .mysqli_connect_error());
	}else{
		// echo "Connected to the database";
	}

?>