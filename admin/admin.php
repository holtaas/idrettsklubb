<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	
	<?php
	
	//echo("print_r($_POST)");
	
	if (($_POST["login"] == "noe") ) {
		
		echo("Du er logget inn");
	}
	
	else {
		echo("Du må logge inn");
		die();
	}

	?>
	<div class="nav">
		<img src="src/admin.png" alt="admin" class="logo">
		<ul>
		<li id="current"><a href="admin.php">Intro</a></li>
		<li><a href="nyhetsfeedAdmin.php">Nyhetsfeed</a></li>
		<li><a href="kalenderAdmin.php">Kalender</a></li>
		<li><a href="medlemmerAdmin.php">Medlemmer</a></li>
		<li><a href="nyttMedlemAdmin.php">Nytt medlem</a></li>
		<li><a href="aktivAdmin.php">Rediger medlem</a></li>
		</ul>
	</div>
		
	<div class="wrapper">
	<h1>Bruksanvisning</h1>
	<p>På denne siden har du mulighet til å administrere Arnis Huertes hjemmeside. Til venstre på siden har du muligheten til å navigere deg gjennom redigeringsalternativer for hjemmesiden. </p>
	</div>
	
</body>
</html>