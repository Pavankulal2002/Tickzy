<?php
	include ("../Database file/dbconnect.php");

    $seatid = $_GET['ai'];
	$stype = $_GET['at'];
	$slots = $_GET['as'];
	$price=$_GET['ap'];

    if(isset($_POST['submit'])) {	
        $seatid= $_POST["seatid"];
        $stype = $_POST["stype"];
        $slots = $_POST["slots"];
        $price=$_POST["price"];

	$sql ="UPDATE accomodation SET acc_id='$seatid',acc_type='$stype',acc_slot='$slots',acc_price='$price' WHERE acc_id='$seatid'";
	
	$result = mysqli_query($conn, $sql);
	
	if($result) {
        echo "<script>alert('Data updated successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/seats.php" /> 
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
    <title>Update Seats</title>
</head>

<body>
    <div class="wrapper">
    <form action="updateseats.php" method="POST">
            <div class="container">
            <h1>Update Seats</h1>
                <label><b>Seat ID</b></label>
                <input type="text" name="seatid" id="seatid" value="<?php echo "$seatid" ?>" required>
                <label><b>Seat Type</b></label>
                <input type="text" name="stype" id="stype" value="<?php echo "$stype"?>" required>
                <label><b>Slots</b></label>
                <input type="text" name="slots" id="slots" value="<?php echo "$slots"?>" required>
                <label><b>Price</b></label>
                <input type="text" name="price" id="price" value="<?php echo "$price"?>" required>
                <button type="submit" name="submit" >SUBMIT</button>
            </div>
        </form>
    </div>
        
</body>
</html>