<?php
$ani=mysqli_connect("localhost","root","","con");

if ($ani===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}



$Username = mysqli_real_escape_string($ani,$_REQUEST['Username']);
$Password = mysqli_real_escape_string($ani,$_REQUEST['Password']);



$sql = "UPDATE id SET Username = '$Username',Password='$Password' Where (Username = '$Username')";

if(mysqli_query($ani,$sql))

{

echo"records updated sucessfully.";
echo "<a href = 'Update.html' >..... Return </a>";

}

else
 {

echo "ERROR:could not able to execute$sql.".mysqli_error($ani);
}

mysqli_close($ani);
?>
