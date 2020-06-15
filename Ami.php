<?php
$ani=mysqli_connect("localhost","root","","con");

if ($ani===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}


$Username = mysqli_real_escape_string($ani,$_REQUEST['Username']);
$Password = mysqli_real_escape_string($ani,$_REQUEST['Password']);

$sql="INSERT INTO id( Username ,Password) VALUES ('$Username','$Password')";
if(mysqli_query($ani,$sql))
{
echo"records added sucessfully.";
echo "<a href = 'add.html' >..... Return </a>";
}
else {
echo "ERROR:could not able to execute$sql.".mysqli_error($ani);
}
mysqli_close($ani);
?>
