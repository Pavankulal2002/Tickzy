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
    border: 1px solid #3f575e;
    padding: 12px;
    text-align: left;
    }

th {
     width: 30%;
     background-color: rgba(51, 51, 51, 0.924);
    color: white;
    }
tbody{
    font-size : 2rem;
    background :rgb(136, 212, 231);
    text-align:center;
    font-weight: bold;
}
table {

        border-collapse: collapse;
        background-color: rgba(255, 255, 255, 0.918);
        margin-top :5rem;
        margin-left: auto;
        margin-right: auto;
        width:70%;
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
                <h1>PROFILE</h1>
                <center><img class = 'img - circle profile_img' height=50 width=50 src='./images/profile.png' background-color=white> </center>
        
        <div>
            <table class="table">
            
                    
                    
               
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
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <th>USERNAME</th>
                            <td>".$row['username']."</td>
                        </tr>
                        <tr>
                            <th>EMAIL</th>
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
    header('location: ../pages/login.html');
}//end if else isset

 ?>