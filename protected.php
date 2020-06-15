<?php

session_start();

if($_SESSION["login"] ="YES")
{  
    echo"you have successfully logged in !";
	header("Location  : login.php");
}

?>
<html>
<head>
<title> Protected Information</title>
<body>
<h1> You are welcome to the protected sections.. only valid users can see this information <h1>
<p> You can see it if you are logged in. </p>
</body>
</html>
