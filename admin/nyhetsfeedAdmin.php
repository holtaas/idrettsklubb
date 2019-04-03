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
				<tr><th>Tittel</th></tr>
				<tr><td><div><input type="text" name="title" placeholder="Skriv inn nyhetstittel her!" size="40"><br></div></td></tr>
				<tr><th>Nyhetsmelding</th></tr>
				<tr><td><div><textarea name="nyhet" placeholder="Skriv inn nyheten her!" rows="6" cols="50"></textarea><br></div></td></tr>
				
				<tr><td><div><input type="submit" name="send" value="Post nyheten!"></div></td></tr>
				
			</form>
		</table>
		<div class="successful">
		<?php
		if(isset($_POST["send"]))
		{
			include 'connectToDatabase.php';
			
			$title = $_POST["title"];
			$nyhet = $_POST["nyhet"];

			$sql = "INSERT INTO News (title, news) VALUES ('$title', '$nyhet');";
			if($connection->query($sql))
			{
			echo('<div class="addedNew">');
			echo('<h2>');
			echo("Nyheten $title ble lagt til!");
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