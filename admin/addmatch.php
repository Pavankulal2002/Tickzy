<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminforms.css">
    <title>Add Matches</title>
</head>
<body>
    <div class="wrapper">
        <form action="addmatch.php" method="post">
            <div class="container">
                <h1>Add Matches</h1>
                <label><b>Match Number</b></label>
                <input type="text" placeholder="Enter Match Number" name="matchno" id="matchno" required>
                <label><b>Match Date</b></label>
                <input type="date" placeholder="Enter Match Date" name="date" id="date" required>
                <label><b>Match</b></label>
                <input type="text" placeholder="Enter Match" name="match" id="match" required>
                <label><b>Stadium</b></label>
                <input type="text" placeholder="Enter Stadium" name="stadium" id="stadium" required>
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
        
</body>
</html>


<?php
include ("../Database file/dbconnect.php");
	

if($_SERVER["REQUEST_METHOD"] == "POST") {	
	$matchno = $_POST["matchno"];
	$date = $_POST["date"];
	$match = $_POST["match"];
	$stadium=$_POST["stadium"];
			
	
	$sql = "INSERT INTO `matches` (`match_no`, `date`, `match`, `venue`) VALUES ('$matchno', '$date', '$match', '$stadium')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result) {
        echo "<script>alert('Data inserted successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/matches.php" /> 
        <?php
            }
            else{
                echo "<script>alert('Unable to insert')</script>";
            }
}
?>