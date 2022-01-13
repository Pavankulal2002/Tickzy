<?php
	include ("../Database file/dbconnect.php");
    error_reporting(0);

    $matchno = $_GET['mn'];
	$date = $_GET['date'];
	$match = $_GET['match'];
	$stadium=$_GET['stdm'];

    if(isset($_POST['submit'])) {	
	$matchno = $_POST["matchno"];
	$date = $_POST["date"];
	$match = $_POST["match"];
	$stadium=$_POST["stadium"];

	$sql ="UPDATE origin SET match_id='$matchno',`date`='$date',match_desc='$match',venue='$stadium' WHERE match_id='$matchno'";
	
	$result = mysqli_query($conn, $sql);
	
	if($result) {
        echo "<script>alert('Data updated successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/matches.php" /> 
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
    <title>Update Matches</title>
</head>

<body>
    <div class="wrapper">
    <form action="updatematch.php" method="POST">
            <div class="container">
            <h1>Update Matches</h1>
                <label><b>Match No</b></label>
                <input type="text"  name="matchno" id="matchno" value="<?php echo "$matchno" ?>" required>
                <label><b>Date</b></label>
                <input type="date"  name="date" id="date" value="<?php echo "$date"?>" required>
                <label><b>Match</b></label>
                <input type="text"  name="match" id="match" value="<?php echo "$match"?>" required>
                <label><b>Stadium</b></label>
                <input type="text"  name="stadium" id="stadium" value="<?php echo "$stadium"?>" required>
                <button type="submit" name="submit" >SUBMIT</button>
            </div>
        </form>
        
</body>
</html>


