<?php

session_start();

if(!isset($_SESSION['patientname']))
{
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Medical Website</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main_styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<style type="text/css">
		td,th{
			padding: 5px 10px 5px 10px;
			font-size: 25px;
		}
	</style>
</head>
<body>

	<header>
		<div class="mainheader">
			<div class="logo">
				<img src="images/logo.png">
			</div>

			<nav>
				<a href="#">home</a>
				<a href="#">about</a>
				<a href="#">services</a>
				<a href="#">contact</a>
			</nav>

		</div>

		<main>
			<section class="left-sec"><br><br><br><br>
				<h3 style="font-size: 65px;">Welcome, <?php echo $_SESSION['patientname']; ?></h3>
				<br><br><br><br>	
				<button id="load-button">Medical Records</button><br>
				
				
				<button onclick="location.href = 'logout.php';">LOGOUT</button>
			</section>

			<section class="right-sec"><br><br><br><br>
				<table style="visibility: hidden; text-align: center;" id="table-data" border="1" cellspacing="0" cellpadding="30px">
					<tr>
						<th>Date</th>
						<th>Time</th>
						<th>Temperature (&#8451;)</th>
						<th>Heart Rate (BPM)</th>
						<th>Oxygen Rate (%)</th>
						<th>Condition</th>
					</tr>

					<tr>
						
					</tr>

				</table>
			</section>
		</main>

	</header>


<script type="text/javascript" src="jquery/jquery.js"></script>
<!-- AJAX CODE -->
<script type="text/javascript">
	$(document).ready(function(){
		$("#load-button").on("click",function(e){
			$.ajax({
				url : "ajax-medical-record.php", // send request to 
				type : "POST",						// GET or POST
				success : function(data){		// function runs only when request is successful
					$("#table-data").css("visibility","visible");
					$("#table-data").html(data);
				}
			})
		});
	});
</script>
<!-- e parameter is event triggered. Its like 'this' keyword in js -->
</body>
</html>