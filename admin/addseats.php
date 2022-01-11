<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminforms.css">
    <title>Add Seats</title>
</head>
<body>
    <div class="wrapper">
        <form action="addstadium.php" method="post">
            <div class="container">
                <h1>Add Seats</h1>
                <label><b>Seat ID</b></label>
                <input type="text" placeholder="Enter Seat ID" name="seatid" id="seatid" required>
                <label><b>Seat Type</b></label>
                <input type="text" placeholder="Enter Seat Type" name="stype" id="stype" required>
                <label><b>Slots</b></label>
                <input type="text" placeholder="Enter Slot" name="slot" id="slot" required>
                <label><b>Price</b></label>
                <input type="text" placeholder="Enter Price" name="price" id="price" required>
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
        
</body>
</html>


<?php
include ("../Database file/dbconnect.php");
	

if($_SERVER["REQUEST_METHOD"] == "POST") {	
	$seatid = $_POST["seatid"];
	$stype = $_POST["stype"];
	$slot = $_POST["slot"];
	$price=$_POST["price"];
			
	
	$sql = "INSERT INTO `accomodation` (`acc_id`, `acc_type`, `acc_price`, `acc_slot`) VALUES ('$seatid', '$stype', '$slot', '$price')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result) {
        echo "<script>alert('Data inserted successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/seats.php" /> 
        <?php
            }
            else{
                echo "<script>alert('Unable to insert')</script>";
            }
}
?>