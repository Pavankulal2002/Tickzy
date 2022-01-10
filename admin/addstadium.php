
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminforms.css">
    <title>Add Stadiums</title>
</head>
<body>
    <div class="wrapper">
        <form action="addstadium.php" method="post">
            <div class="container">
                <h1>Add Stadiums</h1>
                <label><b>Stadium ID</b></label>
                <input type="text" placeholder="Enter Stadium ID" name="stadiumid" id="stadiumid" required>
                <label><b>Stadium Name</b></label>
                <input type="text" placeholder="Enter Stadium Name" name="sname" id="sname" required>
                <label><b>Location</b></label>
                <input type="text" placeholder="Enter Location" name="location" id="location" required>
                <label><b>Capacity</b></label>
                <input type="text" placeholder="Enter Capacity" name="capacity" id="capacity" required>
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
        
</body>
</html>


<?php
include ("../Database file/dbconnect.php");
	

if($_SERVER["REQUEST_METHOD"] == "POST") {	
	$stadiumid = $_POST["stadiumid"];
	$sname = $_POST["sname"];
	$location = $_POST["location"];
	$capacity=$_POST["capacity"];
			
	
	$sql = "INSERT INTO `stadiums` (`stadium_id`, `s_name`, `s_location`, `capacity`) VALUES ('$stadiumid', '$sname', '$location', '$capacity')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result) {
        echo "<script>alert('Data inserted successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/stadium.php" /> 
        <?php
            }
            else{
                echo "<script>alert('Unable to insert')</script>";
            }
}
?>