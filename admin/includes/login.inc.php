<?php

if (isset($_POST['login-submit'])) {

	require	'dbh.inc.php';

	$brukernavn = $_POST['username'];
	$passord = $_POST['password'];

	$sql = "SELECT username, password FROM login";
			$results = $connection->query($sql);
			
			$foundUser = false;
			while($row = $results->fetch_assoc())
			{
				$brukernavnDatabase = $row['username'];
				$passordDatabase = $row['password'];
				
				if($brukernavnDatabase == $brukernavn && $passordDatabase == $passord)
				{
					session_start();
					$_SESSION['username'] = $brukernavnDatabase;
					
					header("Location:../admin.php?login=success");
					exit();
				}				
			}
			if($foundUser == false)
			{
				header("Location:../admin.php?wrongpwd");
					exit();
			}
		}