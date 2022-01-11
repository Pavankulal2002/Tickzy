<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminforms.css">
    <title>Change Password</title>
</head>
<body>
    <div class="wrapper">
        <form action="changepswd.php" method="post">
            <div class="container">
                <h1>Change Password</h1>
                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required>
                <label><b>Current Password</b></label>
                <input type="password" placeholder="Enter Current Password" name="cpassword" id="cpassword" required>
                <label><b>New Password</b></label>
                <input type="password" placeholder="Enter New Password" name="npassword" id="npassword" required>
                <label><b>Confirm New Password</b></label>
                <input type="password" placeholder="Re-Enter New Password" name="cnpassword" id="cnpassword" required>
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
        
</body>
</html>


<?php
include ("../Database file/dbconnect.php");


        $username = $_POST['username'];
        $password = $_POST['cpassword'];
        $newpassword = $_POST['npassword'];
        $confirmnewpassword = $_POST['cnpassword'];

        
?>