<?php
include ("../Database file/dbconnect.php");
error_reporting(0);

$stadium_id=$_GET['si'];
$sql="DELETE FROM `stadiums` WHERE stadium_id='$stadium_id'";

$result=mysqli_query($conn,$sql);

// if($result) {
//     echo "<script>alert('Data deleted successfully')</script>";
// }
// else{
//     echo "Unable to delete";
// }

?>
<meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/stadium.php" /> 