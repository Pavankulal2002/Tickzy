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
    <title>profile</title>

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
    font-size: 0.875rem;
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
        <a data-aos="zoom-in-left" data-aos-delay="300" href="index.html">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">upcoming matches</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">booking history</a>
      <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">Profile</a> 
      <!---<a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a> -->
      <!---  <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a> -->
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="../booking/reserved.php" class="btn">book now</a>
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="../PHP file/logout.php" class="btn">logout</a>

</header>

<div class=profile>

                <!-- <h2>hii Pavan,</h2> -->
                <h1>PROFILE</h1>
                <center><img class = 'img - circle profile_img' height=50 width=50 src='./images/profile.png' background-color=white> </center>
        
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <!-- <th>MATCH</th>
                    <th>STADIUM</th>
                    <th colspan="2">OPERATIONS</th> -->
                </tr>
                </thead>
            <?php
               
                include ("../Database file/dbconnect.php");

                $user =$_SESSION['username'];

                $sql = "SELECT * FROM `user` WHERE username='$user'";
                $result = mysqli_query($conn, $sql);

                // Find the number of records returned
                $num = mysqli_num_rows($result);
                // echo $num;
                // echo " records found in the DataBase<br>";

                if($num> 0){
                    // We can fetch in a better way using the while loop
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>".$row['username']."</td>
                            <td>".$row['email']."</td>
                            
                        </tr>
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