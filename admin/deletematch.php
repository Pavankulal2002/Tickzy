<?php
include ("../Database file/dbconnect.php");
error_reporting(0);

$matchno=$_GET['mn'];
$sql="DELETE FROM `matches` WHERE match_no='$matchno'";

$result=mysqli_query($conn,$sql);

if($result) {
    echo "<script>alert('Data deleted successfully')</script>";
    ?>
    <meta http-equiv="refresh" content="0;url=http://localhost/Tickzy/admin/stadium.php" /> 
    <?php
}
else{
    echo "Unable to delete";
}

?>
