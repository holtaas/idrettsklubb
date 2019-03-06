<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<div class="nav">
		<ul>
		<li><a href="admin.php">Hjem</a></li>
		<li><a href="indexAdmin.php">Hovedside</a></li>
		<li><a href="kalenderAdmin.php">Kalender</a></li>
		<li><a href="historieAdmin.php">Historie</a></li>
		<li><a href="omOssAdmin.php">Om oss</a></li>
		<li><a href="medlemmerAdmin.php">Medlemmer</a></li>
		</ul>
	</div>
		
	<div class="wrapper">
	<h1>Hjemmeside</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque accusamus quia eveniet deleniti, quos at ipsam ratione optio, libero aspernatur, quo consequatur minus ex explicabo dolorem temporibus possimus distinctio corporis!</p>
		<table class="loginTable">
			<form method="POST">
				<tr><th>Legg til en nyhet!</th></tr>
				<tr><td><div><input type="text" name="nyhet" placeholder="Skriv inn nyheten her!" size="60"><br></div></td></tr>
				
				<tr><td><div><input type="submit" name="post" value="Post nyheten!"></div></td></tr>
				
			</form>
		</table>
		<div class="successful">
		<?php
		if(isset($_POST["post"]))
		{
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
				//echo("Connection Successfull<br>");
			}
			$connection->set_charset("utf8");
			
			
			$nyhet = $_POST["nyhet"];

			$sql = "INSERT INTO News (news) VALUES ('$nyhet');";
			$results = $connection->query($sql);
			if($connection->query($sql))
			{
			echo('<div class="addedNew">');
			echo('<h2>');
			echo("Nyheten ble lagt til!");
			echo("</h2>");
			echo('</div>');
			}
			else{
				echo("Error");
			}	
		}
		?>
	</div>
	</div>
	
</body>
</html>