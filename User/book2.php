<?php

	// Connect to database
	$conn = mysqli_connect("localhost","root","","tickzy");
	
	// mysqli_connect("servername","username","password","database_name")
	
	// Get all the categories from category table
	$sql = "SELECT * FROM `matches` WHERE date='{$date}'";
	$all_categories = mysqli_query($conn,$sql);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly
	if(isset($_POST['submit']))
	{
		// Store the Product name in a "name" variable
		$date = mysqli_real_escape_string($conn,$_POST['date']);
		
		// Store the Category ID in a "id" variable
		$match = mysqli_real_escape_string($conn,$_POST['match1']);
		
		// Creating an insert query using SQL syntax and
		// storing it in a variable.
		$sql_insert =
		"INSERT INTO `book`(`date`, `match1`)
			VALUES ('$date','$match')";
		
		// The following code attempts to execute the SQL query
		// if the query executes with no errors
		// a javascript alert message is displayed
		// which says the data is inserted successfully
		if(mysqli_query($conn,$sql_insert))
		{
			echo '<script>alert("booking added successfully")</script>';
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">	
</head>
<body>
	<form method="POST">
		<label>date of the match</label>
		<input type="date" name="date" required><br>
		<label>Match details</label>
		<select name="match1">
			<?php
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($category = mysqli_fetch_array(
						$all_categories,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $category["match"];
					// The value we usually set is the primary key
				?>">
					<?php echo $category["match"];
						// To show the category name to the user
					?>
				</option>
			<?php
				endwhile;
				// While loop must be terminated
			?>
		</select>
		<br>
		<input type="submit" value="submit" name="submit">
	</form>
	<br>
</body>
</html>
