<html>
<body>

 <?php
 
 if($_POST["USERNAME"]== "anish" && $_POST["PASSWORD"] =="pass")
 {
      session_start();
	  $_SESSION["login"]="YES";
	    echo " You are logged in as  :" .$_POST["USERNAME"]. ".<br>";
		echo " <p> <a href ='protected.php'> Link to protected file </a></p>";
 }
 
 else 
 { 
     session_start();
	 $_SESSION["login"]="NO";
	   echo "<h1> You are not logged in correctly </h1>";
	   
	   echo "<p> <a href ='login.php'> please login again with right credentials 
	   !</a></p>";
 }
 
 
 ?>
 