	<?php
	require("seit.php");

	$fname=$_POST["fname"];
 	$lname=$_POST["lname"];
	$age=$_POST["age"];
    $email=$_POST["email"];
    $add=$_POST["add"];


	$insert = mysql_query("Insert into account values('$fname','$lname','$age','$email','$add')");
	echo "RECORD ADDED <br>";

	?>
