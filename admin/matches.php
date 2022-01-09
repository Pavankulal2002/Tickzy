<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>     
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
                   <!-- <li> <i class="fa fa-user" height="25px" width="25px"></i> </li> -->
                  <!---  <img src="fa.img"  width="25px" height="25px" alt="">  -->
                    <!-- <span class="name">Pavan</span>
                    <span class="username">@kulalpavan</span> -->
                </div>
            </div>
        </div>

        <div class="sidebar bg">
            <ul>
                <div class="toggle">
                <li >
                    <i class="fa fa-signal"></i>
                    <a href="dashboard.html">Dashboard</a>  
                    <div class="togglebtn"></div>  
                </li>
  
         
                <li>
                    <i class="fa fa-globe"></i>
                    <a href="stadium.php">Stadiums</a>
                     
                </li>

                <li Class="dashboard">
                    <i class="fa fa-folder-open-o"></i>
                    <a href="matches.html">Matches</a>
                    <div class="togglebtn"></div> 
                </li>

                <li>
                    <i class="fa fa-credit-card-alt"></i>
                    <a href="booking.php">Booking</a>
                </li>

                <li>
                    <i class="fa fa-history"></i>
                    <a href="history.html">History</a>
                </li>

                <li>
                    <i class="fa fa-info-circle"></i>
                    <a href="logout.html">Logout</a>
                </li>  
            </div>
            </ul>
        </div>

        <div class="header">
            <div class="tittle">
                <!-- <h2>hii Pavan,</h2> -->
                <h1>Match List</h1>
            </div>
        </div>
        <div>
            <table class="">
                <thead>
                <tr>
                    <th>MATCH NO</th>
                    <th>DATE</th>
                    <th>MATCH</th>
                    <th>STADIUM</th>
                    <th colspan="2">OPERATIONS</th>
                </tr>
                </thead>
            <?php
               
                include ("../Database file/dbconnect.php");

                $sql = "SELECT * FROM `matches`";
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
                            <td>".$row['match_no']."</td>
                            <td>".$row['date']."</td>
                            <td>".$row['match']."</td>
                            <td>".$row['stadium']."</td>
                            <td>
                            <a class='button1' href='updatematch.php?mn=$row[match_no]&date=$row[date]&match=$row[match]&stdm=$row[stadium]'>UPDATE</a>
                            </td>
                            <td>
                            <a class='button2' href='deletematch.php?mn=$row[matchno]' onclick='return checkdelete()'>DELETE</a>
                            </td>
                        </tr>
                        ";
                    }
                }
               
            ?>
            </table>
            <h2 class="click">To add matches <a class="button3" href="addmatch.php">click here</a></h2>
        </div>
    </div>
</body>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
</html>


