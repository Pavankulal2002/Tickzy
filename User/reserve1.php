<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	$database = "tickzy";

	$conn = mysqli_connect($servername,
		$username, $password, $database);

	if(!$conn) {
		die("Error". mysqli_connect_error());
	}
	
    $select= "SELECT * FROM 'matches'";
    $result=mysqli_query($conn,$select);
    $message ='';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user booking</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/reserve.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>
    

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

     <img class="logo" src="../images/Tickzy cropped (1).png" alt="Tickzy">
    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">upcoming matches</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">booking history</a>
     <!---  <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>  -->
      <!---<a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a> -->
      <!---  <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a> -->
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="reserve2.php" class="btn">book now</a>

</header>

<!-- header section ends -->



<!-- booking form section starts  -->

<section class="book-form" id="book-form">

    <form action="reserve1.php" method="POST">

        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>Choose the date</span>
            <input type="date" value="">
           
        </div>
        

        <div  data-aos="zoom-in" data-aos-delay="150" class="inputBox">
          <label>Select the match</label>
            <select name="match" class="form control form control-lg" id="match">
                <option class="options" value="" disabled selected>Select Match</option>
                <?php foreach($result as $key => $value){ ?>
                    <option value="<?=$value['match'] ; ?>"><?=$value['match'] ; ?> </option>

              <?php  } ?>

            </select>
            
        </div>
        

        <div>
            <a data-aos="zoom-in-left" data-aos-delay="300" href="reserve2.php" class="btn" type="submit">Next</a>

        </div>
    </form> 

</section> 

<!-- booking form section ends -->






<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>