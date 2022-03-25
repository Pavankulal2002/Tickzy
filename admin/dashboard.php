<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header('location: ../pages/adminlogin.html');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">

   

</head>    
<style>
    .flex-container1 {
    display: flex;
    height: fit-content;
    width: fit-content;
    justify-content: space-between;
    flex-wrap: wrap;
    }
    .flex-container2 {
    display: flex;
    height: fit-content;
    width: initial;
    justify-content: space-evenly;
    }
    .flex-item{
      background-color: #ffffff;
      margin: 10px;
      padding: 20px;
      font-size: 30px;
      height: 45px;
      width: 215px;
      border-radius: 20px;
      justify-self: start;
    }
    .flex-item1{
      background-color: #ffffff;
      margin: 10px;
      padding: 20px;
      font-size: 30px;
      height: 300px;
      width: 500px;
      border-radius: 20px;
    flex:wrap;
    }
.slideshow-container {
  max-width: 900px;
  position: relative;
  margin: auto;
  margin-top:10px;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

table{
    margin-top:20px;
    padding: 10px;
    
}
th,td{
    background-color: rgb(235 225 245 / 77%);
}
.info{
    font-size:25px;
    color:#574a9a;
}
.flex-child{
    display: flex;
    align-items:center;
    justify-content: center;
}
span{
    padding-left:30px;
}

</style> 

<body>     
    <div class="container">
        <div class="navbar">
            <div class="logo d">
                <img src="../images/Tickzy cropped.png" width="36px" alt="Tickzy">
            </div>

           ,<!--- <div class="searchbox d">
                <form action="#">
                    <input type="text" placeholder="Search">
                    <i class="fa fa-search"></i>
                </form>
            </div>   -->

            <div class="navitem d">
              <!--  <div class="icons">
                    <ul>
                        <li><i class="fa fa-envelope"></i></li>
                        <li><i class="fa fa-bell"></i></li>
                    </ul>
                </div>  -->

                <div class="account">
                </div>
            </div>
        </div>

        <div class="sidebar bg">
            <ul>
                <li class="dashboard">
                    <i class="fa fa-signal"></i>
                    <a href="#">Dashboard</a>  
                    <div class="togglebtn"></div>  
                </li>
  
          <div class="toggle">
                <li>
                    <i class="fa fa-globe"></i>
                    <a href="stadium.php">Stadiums</a>
                </li>

                <li>
                    <i class="fa fa-folder-open"></i>
                    <a href="matches.php">Matches</a>
                </li>

                <li>
                    <i class="fa fa-credit-card"></i>
                    <a href="booking.php">Booking</a>
                </li>

                <li>
                    <i class="fa fa-history"></i>
                    <a href="seats.php">Seats</a>
                </li>

                <li>
                    <i class="fa fa-info-circle"></i>
                    <a href="logout.php">Logout</a>
                </li>  
            </div>
            </ul>
        </div>

        <div class="header">
            <div class="tittle">
                <!-- <h2>hii Pavan,</h2> -->
                <h1>DASHBOARD</h1>
            </div>
        </div>
        <div class="flex-container1">
            <div class="flex-item">
              
                <i class="fa fa-user" style="font-size:36px;color:#1f0c4c;float:left;"></i>
                <div class="flex-child">
                <h1 class="info">
                <?php 
                    include ("../Database file/dbconnect.php");
                    $user = $conn->query("SELECT count(userid) as total FROM user")->fetch_assoc()['total'];
                    echo number_format($user);
                  ?>
                </h1>
                </div>
                <span>Number of Users</span> 
            </div>
            <div class="flex-item">
            <i class="fa fa-list" style="font-size:36px;color:#1f0c4c;float:left;"></i>
            <div class="flex-child">
            <h1 class="info">
            
               <?php 
                    include ("../Database file/dbconnect.php");
                    $booking = $conn->query("SELECT count(book_id) as total FROM booked")->fetch_assoc()['total'];
                    echo number_format($booking);
                  ?>
               </h1>
                
            </div>
            <span>Number of Booking</span>
            </div>
            <div class="flex-item">
            <i class="fa fa-baseball-ball" style="font-size:40px;color:#1f0c4c;float:left;"></i>
            <div class="flex-child">
            
            <h1 class="info" >
               
                <?php 
                    include ("../Database file/dbconnect.php");
                    $stadium = $conn->query("SELECT count(stadium_id) as total FROM stadiums")->fetch_assoc()['total'];
                    echo number_format($stadium);
                  ?>
                </h1>
                
            </div>
            <span>Number of Stadiums</span>
            </div>
            <div class="flex-item1" style="flex-basis: 500px">
                <h1 class="info">STADIUMS </h1>
                <div class="slideshow-container">

                    <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="../User/images/M.Chinnaswamy-Stadium.jpg" style="width:100%; height:250px;">
                    <div class="text"><h3>M. Chinnaswamy Stadium</h3>
                <p>Bangalore, Karnataka</p></div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="../User/images/melbourne-cricket-ground-me1215.jpg" style="width:100%;height:250px;">
                    <div class="text"><h3>Eden Gardens</h3>
                <p> Kolkata, India.</p></div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="../User/images/wankhade stadium.jpg" style="width:100%;height:250px;">
                    <div class="text"><h3>Wankhede Stadium</h3>
                <p>Mumbai,India.</p></div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                    <br>

                </div>
            <div class="flex-item1" style="flex-basis: 200px">
                <h1 class="info">UPCOMING MATCHES</h1>
                <table class="matchinfo">
                <?php
               
                    include ("../Database file/dbconnect.php");

               $sql = "SELECT * FROM `origin`";
               $result = mysqli_query($conn, $sql);
               $num = mysqli_num_rows($result);
               if($num> 0){
                   while($row = mysqli_fetch_assoc($result)){
                       echo "
                       <tr>
                           <td>".$row['match_desc']."</td>
                           <td>".$row['date']."</td>
                       </tr>
                       ";
                   }
               }
              
           ?>
            </table>
            </div>    
        </div>
    </div>
</body>  

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
        $(document).ready(function(){
            $(".togglebtn").click(function(){
                $(".toggle").slideToggle();
            });

            $(".togglebtn").click(function(){
                $(".togglebtn").toggleClass("active");
            });
        });
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</html>


