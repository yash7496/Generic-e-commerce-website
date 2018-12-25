<?php
	$connect=mysql_connect("localhost","root","") or die (mysql_error());

	mysql_select_db("Registration") or die(mysql_error());

	echo "connection sucessfully <br>";

?>

