<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
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

               
            </div>
        </div>

        <div class="sidebar bg">
            <ul>
                <div class="toggle">
                <li >
                    <i class="fa fa-signal"></i>
                    <a href="dashboard.php">Dashboard</a>  
                    <div class="togglebtn"></div>  
                </li>
  
         
                <li>
                    <i class="fa fa-globe"></i>
                    <a href="stadium.php">Stadiums</a>
                     
                </li>

                <li>
                    <i class="fa fa-folder-open-o"></i>
                    <a href="matches.php">Matches</a>
                    
                </li>

                <li  Class="dashboard">
                    <i class="fa fa-credit-card-alt"></i>
                    <a href="#">Booking</a>
                    <div class="togglebtn"></div> 
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
                <!-- <h2>hii Pavan,</h2>
                <h1>Overview</h1> -->
                <h1>Booking List</h1>
            </div>
        </div>
        <div>
            <table class="">
                <thead>
                <tr>
                    <th>BOOKING ID</th>
                    <th>NAME</th>
                    <th>DATE</th>
                    <th>MATCH ID</th>
                    <th>SEAT ID</th>
                   <th>CONTACT NUMBER</th>
                    <th>EMAIL</th>
                    <th>REFERENCE ID</th>
                    <th>OPERATIONS</th>
                    
                    <!-- <th colspan="2">OPERATIONS</th> -->
                </tr>
                </thead>
            <?php
               
                include ("../Database file/dbconnect.php");

                $sql = "SELECT * FROM `booked`";
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
                            <td>".$row['book_id']."</td>
                            <td>".$row['book_name']."</td>
                            <td>".$row['book_departure']."</td>
                            <td>".$row['match_id']."</td>
                            <td>".$row['acc_id']."</td>
                            <td>".$row['book_contact']."</td>
                            <td>".$row['book_address']."</td>
                            <td>".$row['book_tracker']."</td>

                            <td>
                            <a class='button2' href='deletebooking.php?si=$row[book_id]' onclick='return checkdelete()'>DELETE</a>
                            </td>
                        </tr>
                        ";
                    }
                }
               
            ?>
            </table>
            -->
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





