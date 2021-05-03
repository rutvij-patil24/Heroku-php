<!DOCTYPE html>
<html lang="en">
<head>
	<title>Appointments</title>
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
				<a href="thapa_index02.html">home</a>
				<a href="about.html">about</a>
				<a href="services.html">services</a>
				<a href="contact_form.php">contact</a>
			</nav>

			
		</div>

		<main>
			<section class="left-sec">
				<h1>Previous Appointments</h1><br><br><br><br>
				<?php

$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'healthcare');

$sqlget = "select * from appointment";
$sqldata = mysqli_query($con,$sqlget) or die('error');

echo "<table>";
echo "<tr><th>Date</th><th>Condition</th><th>Treatment done in Hospital</th></tr>";

while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{
	echo "<tr><td>";
	echo $row['date'];
	echo "</td><td>";
	echo $row['cond'];
	echo "</td><td>";
	echo $row['hname'];
	echo "</td></tr>";
}
echo "</table>";

?>
			</section>
		</main>

	</header>




</body>
</html>