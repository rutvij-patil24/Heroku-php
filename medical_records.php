<!DOCTYPE html>
<html lang="en">
<head>
	<title>Medical Records</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main_styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>

<body>

	<header>
		<div class="mainheader">
			<div class="logo">
				<img src="images/logo.png">
			</div>

			<nav>
				<a href="index.html">home</a>
				<a href="about.html">about</a>
				<a href="services.html">services</a>
				<a href="contact_form.php">contact</a>
			</nav>

			
		</div>

		<main>
			<section class="left-sec">
				<h1>Medical Records</h1><br><br><br><br>
				<?php

$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'healthcare');

$sqlget = "select * from records";
$sqldata = mysqli_query($con,$sqlget) or die('error');

echo "<table>";
echo "<tr><th>Date</th><th>Time</th><th>Temperature (Celcius)</th><th>Heart Rate (BPM)</th><th>Oxygen Rate (%)</th><th>Condition</th></tr>";

while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{
	echo "<tr><td>";
	echo $row['date'];
	echo "</td><td>";
	echo $row['time'];
	echo "</td><td>";
	echo $row['temp'];
	echo "</td><td>";
	echo $row['heart_rate'];
	echo "</td><td>";
	echo $row['oxygen'];
	echo "</td><td>";
	echo $row['cond'];
	echo "</td></tr>";
}
echo "</table>";

?>
			</section>
		</main>

	</header>




</body>
</html>