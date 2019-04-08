	<?php
	$server = "elevweb.akershus-fk.no";
	$user = "aajo2108";
	$password = "aajo21081234";
	$database = "aajo2108_idrettslag";
	
	$connection = new MySQLi($server, $user, $password, $database);
	if($connection -> connect_error)
	{
		die("Connection failed ".$connection->connect_error);
	}
	else
	{
		//echo("Connection Successfull"); 
	}
	$connection->set_charset("utf8");
	
	?>