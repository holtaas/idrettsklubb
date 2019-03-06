<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link rel="stylesheet" href="css/admin.css">
</head>

<body>
		<table class="loginTable">
			<form method="POST">
				<tr><th>Login</th></tr>
				<tr><td><div>Brukernavn:</div></td></tr>
				<tr><td><div><input type="text" name="username" placeholder="  Sett inn brukernavn"><br></div></td></tr>
				<tr><td><div>Passord:</div></td></tr>
				<tr><td><div><input type="password" name="password" placeholder="  Sett inn passord"><br></div></td></tr>
				<tr><td><div><input type="submit" name="login" value="Login"></div></td></tr>
				
			</form>
		</table>
		<div class="successful">
		<?php
		if(isset($_POST["login"]))
		{
			echo("Starting.. <br>");
			$server = "elevweb.akershus-fk.no";
			$user = "aajo2108";
			$password = "aajo21081234";
			$databaseName = "aajo2108_idrettslag";

			$connection = new MySQLi($server, $user, $password, $databaseName);
			if($connection -> connect_error)
			{
				die("Connection failed ".$connection->connect_error);
			}
			else
			{
				echo("Connection Successfull<br>");
			}
			$connection->set_charset("utf8");
			$brukernavn = $_POST["username"];
			$passord = $_POST["password"];

			$sql = "SELECT username, password FROM login;";
			$results = $connection->query($sql);
			
			$foundUser = false;
			while($row = $results->fetch_assoc())
			{
				if($row['username'] == $brukernavn && $row['password'] == $passord)
				{
					header("Location: admin.php");
				}				
			}
			if($foundUser == false)
			{
				echo("Wrong username and or password");
			}
		}
		?>
	</div>
</body>
</html>