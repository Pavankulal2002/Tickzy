<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	$database = "tickzy";
	
	$conn = mysqli_connect($servername,
		$username, $password, $database);

	if($conn) {
		
	}
	else {
		die("Error". mysqli_connect_error());
	}
?>
