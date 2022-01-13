<?php
include ("../Database file/dbconnect.php");
error_reporting(0);

$book_id=$_GET['si'];
$sql="DELETE FROM `booked` WHERE book_id='$book_id'";

$result=mysqli_query($conn,$sql);

if($result) {
    echo "<script>alert('Data deleted successfully')</script>";
    ?>
    <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/booking.php" /> 
    <?php
}
else{
    echo "Unable to delete";
}

?>
