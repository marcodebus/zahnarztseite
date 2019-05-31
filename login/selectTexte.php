<?php
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Abgefragen welche Parkplätze es gibt
$result = mysqli_query($con,"SELECT * FROM `texte`");

while($row = mysqli_fetch_array($result))
{
	$Text[] = $row['DE'];
}


?>


