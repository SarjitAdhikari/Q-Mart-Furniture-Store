<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con";

$conn = mysqli_connect("localhost", "root", "", "con");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$admin= mysqli_real_escape_string($conn, $_REQUEST["USERNAME"]);
$psw = mysqli_real_escape_string($conn, $_REQUEST["PASSWORD"]);

$sql = "SELECT Username, Password FROM id";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
	$name = $row['Username'];
	$pass = $row['Password'];

	if (( $admin == $name) and ( $psw == $pass)) 
		{
		$re = 0;
		break;          	
		}

	else if (( $admin != $name) or ( $psw != $pass)) 	
		{
	        $re = 1;
		}


	}
 
	if($re == 0)
	{
	echo "<h1>You have successfully logged in</h1>";
	echo "<a href = 'A.html' > <h2>Lets get started!!</h2> </a>";
	}

	if($re == 1)
	{
	echo "<h1>Your username or password is invalid</h1>";
	}
?>
