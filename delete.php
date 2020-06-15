<?php

$conn = mysqli_connect("localhost", "root", "", "con");

if ($conn === false) 

{
	die("ERROR: Could not connect! " . mysqli_connect_error());
}

$Username = mysqli_real_escape_string($conn, $_REQUEST["Username"]);

$sql = "DELETE FROM id WHERE (Username = '$Username')";

if(mysqli_query($conn, $sql))
{
	echo "Records deleted successfully";

echo "<a href = 'delete.html' >..... Return </a>";

}

else {
	echo "ERROR: Could not able to execute" . mysqli_error($conn);
}

mysqli_close($conn);
?>


