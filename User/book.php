<?php

	// Connect to database
	$conn = mysqli_connect("localhost","root","","tickzy");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql = "SELECT * FROM `matches`";
	$all_categories = mysqli_query($conn,$sql);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly
	if(isset($_POST['submit']))
	{
		
		
		// Store the Category ID in a "id" variable
		$match = mysqli_real_escape_string($conn,$_POST['match1']);
		$date = mysqli_real_escape_string($conn,$_POST['date']);
		$accomodation = mysqli_real_escape_string($conn,$_POST['accomodation']);
		
		
		// Creating an insert query using SQL syntax and
		// storing it in a variable.
		$sql_insert =
		"INSERT INTO `book`(`date`, `match1`,`accomodation`)
			VALUES ('$date','$match','$accomodation')";
		
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


<?php

	// Connect to database
	$conn = mysqli_connect("localhost","root","","tickzy");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql2 = "SELECT `date` FROM `matches` WHERE `match`= 'Aus vs Eng' ";
	$all_categories2 = mysqli_query($conn,$sql2);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly

?>

<?php

	// Connect to database
	$conn = mysqli_connect("localhost","root","","tickzy");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql1 = "SELECT * FROM `accomodation`";
	$all_categories1 = mysqli_query($conn,$sql1);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly

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
		<div>
		
			<label>Select The Match</label>
			<select name="match1">
				<?php

					define("space","  -  ");
					// use a while loop to fetch data
					// from the $all_categories variable
					// and individually display as an option
					while ($category = mysqli_fetch_array(
							$all_categories,MYSQLI_ASSOC)):;
				?>
					<option value="<?php echo $category["match"];
						// The value we usually set is the primary key
					?>" >
						<?php echo $category["match"];

						echo constant ("space");
						echo $category["date"];
							// To show the category name to the user
					?>
					</option>
				<?php
					endwhile;
					// While loop must be terminated
				?>
			</select>
		</div>


		<div>
			<label > select the date</label>
			<select name="date">
				<?php

					
					// use a while loop to fetch data
					// from the $all_categories variable
					// and individually display as an option
					while ($category2 = mysqli_fetch_array(
							$all_categories2,MYSQLI_ASSOC)):;
				?>
					<option value="<?php echo $category2["date"];
						// The value we usually set is the primary key
					?>" >
						<?php echo $category2["date"];

					
					?>
					</option>
				<?php
					endwhile;
					// While loop must be terminated
				?>
			</select>

		</div>

		<div>
			<label > select the accomaodation</label>
			<select name="accomodation">
				<?php

					define("space","  -  ");
					// use a while loop to fetch data
					// from the $all_categories variable
					// and individually display as an option
					while ($category1 = mysqli_fetch_array(
							$all_categories1,MYSQLI_ASSOC)):;
				?>
					<option value="<?php echo $category1["acc_type"];
						// The value we usually set is the primary key
					?>" >
						<?php echo $category1["acc_type"];

						echo constant ("space");
						echo $category1["acc_price"];
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
