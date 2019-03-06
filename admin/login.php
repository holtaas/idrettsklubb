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
			include 'connectToDatabase.php';
			
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