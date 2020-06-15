<?php
$ani=mysqli_connect("localhost","root","","con");

if ($ani===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}


$FirstName = mysqli_real_escape_string($ani,$_REQUEST['FirstName']);
$LastName = mysqli_real_escape_string($ani,$_REQUEST['LastName']);

$Phone = mysqli_real_escape_string($ani,$_REQUEST['Phone']);
$Address = mysqli_real_escape_string($ani,$_REQUEST['Address']);


$sql="INSERT INTO customer(FirstName, LastName, Phone , Address ) VALUES ('$FirstName','$LastName','$Phone','$Address')";
if(mysqli_query($ani,$sql))
{
echo"records added sucessfully.";
}
else {
echo "ERROR:could not able to execute$sql.".mysqli_error($ani);
}
mysqli_close($ani);
?>
