<?php

session_start();
// echo $_SESSION['patientname'];
$patient = $_SESSION['patientname'];

$conn = mysqli_connect("localhost","root","","healthcare") or die("Connection Falied");

$pname = mysqli_real_escape_string($conn,$patient);

$sql = "select * from records where uname = '$pname'";
$result = mysqli_query($conn,$sql) or die("SQL Query Failed");
$output = "";

if(mysqli_num_rows($result)>0){
	$output= '<table border="1" cellspacing="0" cellpadding="10px">
				<tr>
					<th>Date</th>
					<th>Time</th>
					<th>Temperature (&#8451;)</th>
					<th>Heart Rate (BPM)</th>
					<th>Oxygen Rate (%)</th>
					<th>Condition</th>
				</tr>';

				while($row = mysqli_fetch_assoc($result)){
					$output .= "<tr>  <td>{$row["date"]}</td><td>{$row["time"]}</td><td>{$row["temp"]}</td><td>{$row["heart_rate"]}</td><td>{$row["oxygen"]}</td><td>{$row["cond"]}</td>  </tr>";
				}
				$output .= "</table>";
				mysqli_close($conn);
				echo $output;
}else{
	echo "<h3>No record found</h3>";
}

?>