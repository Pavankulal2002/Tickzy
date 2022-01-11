<?php
include ("../Database file/dbconnect.php");
error_reporting(0);

$seat_id=$_GET['ai'];
$sql="DELETE FROM `accomodation` WHERE acc_id='$seat_id'";

$result=mysqli_query($conn,$sql);

if($result) {
    echo "<script>alert('Data deleted successfully')</script>";
    ?>
    <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/seats.php" /> 
    <?php
}
else{
    echo "Unable to delete";
}

?>