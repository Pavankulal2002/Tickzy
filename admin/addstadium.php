
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stadiums</title>
</head>
<style>
    /*set border to the form*/
    body {
        background-image: url("../images/5.jpg");
        /* background-color: rgb(92, 194, 207); */
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: auto;
        resize: both;
        overflow: hidden;
    }


    form {
        padding: 80px 300px;
        color: rgba(255, 255, 255, 0.87);
        font-family: 'Open Sans', sans-serif;
    }

    /*assign full width inputs*/

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 15px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 20px;
    }

    /*set a style for the buttons*/

    button {
        background-color: #38ad0a;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
    }

    /* set a hover effect for the button*/

    button:hover {
        opacity: 0.8;
    }

    /*set padding to the container*/

    .container {
        padding: 30px 50px 30px 50px;
        margin: 1rem,0;
        background-color: rgb(46 59 66 / 53%);;
        
    }
    .signup:hover{
        opacity: 0.8;
    }
    h1{
        text-decoration: underline;
    }
    .wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
        width: 80%;
        margin: 0 1rem;
        padding: 20px 30px;
        border-radius: 8px; }
</style>
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
        echo '<meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/stadium.php" />';
            }
            else{
                echo "<script>alert('Unable to insert')</script>";
            }
}
?>