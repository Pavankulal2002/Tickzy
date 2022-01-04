<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/reserve.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

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

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form" class="btn">book now</a>

</header>

<!-- header section ends -->



<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>SEAT SELECTION</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-acc">
					  <table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							        <th> <span class="glyphicon glyphicon-record" aria-hidden="true"></span> 
							        Seat types
							        </th>
							        <th>
							        	<center>
							        		Slots
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Price
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						   		<?php require_once('../PHP file/data/get_all_accomodations.php'); ?>
						   		<tr>
						   			<td>
						   				<input value="<?= $getSit['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getSit['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getSit['acc_slot'] - $totalSit['sit']; ?>
						   			</td>
						   			<td align="center"><?= $getSit['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getEcoA['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getEcoA['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getEcoA['acc_slot'] - $totalEcoA['ecoA']; ?>
						   			</td>
						   			<td align="center"><?= $getEcoA['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getEcoB['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getEcoB['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getEcoB['acc_slot'] - $totalEcoB['ecoB']; ?>
						   			</td>
						   			<td align="center"><?= $getEcoB['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getTour['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getTour['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getTour['acc_slot'] - $totalTour['ecoT']; ?>
						   			</td>
						   			<td align="center"><?= $getTour['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getCab['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getCab['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getCab['acc_slot'] - $totalCab['ecoC']; ?>
						   			</td>
						   			<td align="center"><?= $getCab['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getDel['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getDel['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getDel['acc_slot'] - $totalDel['ecoD']; ?>
						   			</td>
						   			<td align="center"><?= $getDel['acc_price']; ?></td>
						   		</tr>
						    </tbody>
					    </table>

				      <div class="form-group">
					    <label for="">Total # of Visitor's:</label>
					    <input type="number" min="1" class="form-control" name="totalPass" plactreholder="Total # of Passenger" autocomplete="off">
					  </div>
					  <button type="submit" class="btn btn-success">NEXT
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).on('submit', '#form-acc', function(event) {
		event.preventDefault();
		/* Act on the event */
		var acc = $('input[name="acc"]:checked').val();
		var totalPass = $('input[name="totalPass"]').val();

		if(acc == null){
			alert('Please Select Accomodation!');
		}else{
			// console.log(acc);
			if(totalPass.length == 0){
				alert('Please Enter Number of Passenger!');
			}else{
				$.ajax({
						url: 'data/session_accomodation.php',
						type: 'post',
						dataType: 'json',
						data: {
							acc : acc,
							tp : totalPass
						},
						success: function (data) {
							console.log(data.slot);
							// 	window.location = "passenger.php";
							if(data.slot >= 0){
								window.location = "passenger.php";
							}else{
								alert('Not Enough Slot!');
							}
						},
						error: function(){
							alert('Error: L175+');
						}
					});
			}//end totalPass
		}//end acc == null
	});






</script>

</body>
</html>