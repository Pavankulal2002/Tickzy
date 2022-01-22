<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['username'])){
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking history</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>

        th, td {
    border: 1px solid black;
    padding: 8px;
}

tbody {
    font-size: 1.5rem;
}

thead th {
     width: 20%;
    }
table {

        border-collapse: collapse;
        background-color: rgba(255, 255, 255, 0.918);
        margin-left: auto;
        margin-right: auto;
    }
thead {
    background-color: rgba(51, 51, 51, 0.924);
    color: white;
    font-size: 1.875rem;
    letter-spacing: 2%;
    }
button{
    background-color: #b72c2c; 
    border: none;
    color: white;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
}
button:hover {
    opacity: 0.8;
    cursor: pointer;
}

h1 {
    color: white;
    text-align: center;
    font-size: 4.7rem;

}

.profile{
margin-top : 100px;
}
.button1 {
    display: block;
    width: 65px;
    height: 6px;
    background: #2ba123;
    padding: 9px;
    text-align: center;
    border-radius: 12px;
    color: white;
    font-weight: bold;
    line-height: 7px;
} 
.button2 {
    display: block;
    width: 65px;
    height: 6px;
    background: #c22a2a;
    padding: 9px;
    text-align: center;
    border-radius: 12px;
    color: white;
    font-weight: bold;
    line-height: 7px;
} 
.btn3 {
    display: block;
    width: 140px;
    height: 20px;
    background: #2ba123;
    padding: 9px;
    text-align: center;
    border-radius: 18px;
    color: white;
    font-weight: bold;
    font-size: 15px;
   
} 
a:hover {
    opacity: 0.8;
    cursor: pointer;
}
.click{
    margin-top: 10px;
    font-size: medium;
    margin-left: 10px;
}
.click>a{
    margin-top: 10px;
    font-size: medium;
}



</style>

        

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>

    
<!-- header section starts  -->
<body>

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

     <img class="logo" src="../images/Tickzy cropped (1).png" alt="Tickzy">
    <nav class="navbar">
    <a data-aos="zoom-in-left" data-aos-delay="300" href="./index.html">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="./matches.php">upcoming matches</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="./history.php">booking history</a>
      <a data-aos="zoom-in-left" data-aos-delay="750" href="./profile.php">Profile</a> 
     
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="../booking/reserved.php" class="btn">book now</a>
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="../PHP file/logout.php" class="btn">logout</a>

</header>

<div class=profile>

                <!-- <h2>hii Pavan,</h2> -->
                <h1>Booking History</h1>
                
        
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th>BOOKID</th>
                    <th>CONTACT</th>
                    <th>EMAIL</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>MATCH</th>
                    <th>SEAT TYPE</th>
                    <th>TRACKING ID</th>
                   
                </tr>
                </thead>
            <?php
               
                include ("../Database file/dbconnect.php");

                $user =$_SESSION['username'];

                $sql = "SELECT * FROM `booked` WHERE book_by='$user'";
                $result = mysqli_query($conn, $sql);
                
                $sql1 ="SELECT `booked`.`match_desc` AS `match_id` FROM `origin` AS `booked`";
                $result1 =  mysqli_query($conn, $sql1);
                // Find the number of records returned
                $num = mysqli_num_rows($result);
                // echo $num;
                // echo " records found in the DataBase<br>";

                if($num> 0){
                    // We can fetch in a better way using the while loop
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tbody>
                        <tr>
                            <td>".$row['book_id']."</td> 
                            <td>".$row['book_contact']."</td>
                            <td>".$row['book_address']."</td>
                            <td>".$row['book_name']."</td>
                            <td>".$row['book_age']."</td>
                            <td>".$row['book_gender']."</td>
                            
                            <td>".$row['match_id']."</td>
                            <td>".$row['acc_id']."</td>
                            <td>".$row['book_tracker']."</td>
                            
                        </tr>
                        <tbody>
                        ";
                    }
                }
               
            ?>
            </table>

        </div>

</div>

<!-- header section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>
</body>

</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>