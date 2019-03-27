<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<div class="nav">
		<img src="src/admin.png" alt="admin" class="logo">
		<ul>
		<li><a href="admin.php">Intro</a></li>
		<li id="current"><a href="nyhetsfeedAdmin.php">Nyhetsfeed</a></li>
		<li><a href="kalenderAdmin.php">Kalender</a></li>
		<li><a href="medlemmerAdmin.php">Medlemmer</a></li>
		<li><a href="nyttMedlemAdmin.php">Nytt medlem</a></li>
		<li><a href="aktivAdmin.php">Rediger medlem</a></li>
		</ul>
	</div>
		
	<div class="wrapper">
	<h1>Nyhetsfeed</h1>
	<p>I boksen under kan du publisere en nyhet! Kun de siste 5 publiserte nyhetene vil bli synelig på hjemmesiden.</p>
		<table action="nyhetsfeedAdmin" class="loginTable">
			<form method="post">
				<tr><th>Legg til en nyhet!</th></tr>
				<tr><td><div><input type="text" name="nyhet" placeholder="Skriv inn nyheten her!" size="60"><br></div></td></tr>
				
				<tr><td><div><input type="submit" name="send" value="Post nyheten!"></div></td></tr>
				
			</form>
		</table>
		<div class="successful">
		<?php
		if(isset($_POST["send"]))
		{
			include 'connectToDatabase.php';
			
			$nyhet = $_POST["nyhet"];

			$sql = "INSERT INTO News (news) VALUES ('$nyhet');";
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