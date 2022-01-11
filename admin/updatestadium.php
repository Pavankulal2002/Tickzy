<?php
	include ("../Database file/dbconnect.php");
    error_reporting(0);

    $stadiumid = $_GET['si'];
	$sname = $_GET['sn'];
	$location = $_GET['sl'];
	$capacity=$_GET['sc'];

    if(isset($_POST['submit'])) {	
	$stadiumid = $_POST["stadiumid"];
	$sname = $_POST["sname"];
	$location = $_POST["location"];
	$capacity=$_POST["capacity"];

	$sql ="UPDATE stadiums SET stadium_id='$stadiumid',s_name='$sname',s_location='$location',capacity='$capacity' WHERE stadium_id='$stadiumid'";
	
	$result = mysqli_query($conn, $sql);
	
	if($result) {
        echo "<script>alert('Data updated successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/stadium.php" /> 
        <?php
            }
            else{
                echo "<script>alert('Unable to update')</script>";
            }
        }	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminforms.css">
    <title>Update Stadiums</title>
</head>

<body>
    <div class="wrapper">
    <form action="updatestadium.php" method="POST">
            <div class="container">
            <h1>Update Stadium</h1>
                <label><b>Stadium ID</b></label>
                <input type="text"  name="stadiumid" id="stadiumid" value="<?php echo "$stadiumid" ?>" required>
                <label><b>Stadium Name</b></label>
                <input type="text"  name="sname" id="sname" value="<?php echo "$sname"?>" required>
                <label><b>Location</b></label>
                <input type="text"  name="location" id="location" value="<?php echo "$location"?>" required>
                <label><b>Capacity</b></label>
                <input type="text"  name="capacity" id="capacity" value="<?php echo "$capacity"?>" required>
                <button type="submit" name="submit" >SUBMIT</button>
            </div>
        </form>
    </div>
        
</body>
</html>


