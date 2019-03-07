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
		<li><a href="indexAdmin.php">Hovedside</a></li>
		<li><a href="kalenderAdmin.php">Kalender</a></li>
		<li><a href="historieAdmin.php">Historie</a></li>
		<li><a href="omOssAdmin.php">Om oss</a></li>
		<li id="current"><a href="medlemmerAdmin.php">Medlemmer</a></li>
		</ul>
	</div>
		
	<div class="wrapper">
	<h1>Medlemmer</h1>
		
		<div>
		<h2 class="headerTwo">Nytt medlem</h2> <br>
			<table class="tableNewUser">
			<form method="POST">	
				<tr><td><div>Fornavn:</div></td></tr>
				<tr><td><div><input type="text" name="firstname" placeholder="Ola"><br></div></td></tr>
				<tr><td><div>Etternavn:</div></td></tr>
				<tr><td><div><input type="text" name="surname" placeholder="Nordmann"><br></div></td></tr>
				<tr><td><div>Fødselsdato:</div></td></tr>
				<tr><td><div><input type="date" name="birth" placeholder="2000-01-18"><br></div></td></tr>
				
				<tr><td><div>Kjønn:</div></td></tr>
				<tr><td><div>
				<select name="gender">
				<option value="0">Kvinne</option>
				<option value="1">Mann</option>
				</select>
				<br></div></td></tr>
				
				<tr><td><div>Telefon:</div></td></tr>
				<tr><td><div><input type="number" name="phone" placeholder="98765432"><br></div></td></tr>
				<tr><td><div>Adresse:</div></td></tr>
				<tr><td><div><input type="text" name="adress" placeholder="Katteveien 1"><br></div></td></tr>
				<tr><td><div>Telefon:</div></td></tr>
				<tr><td><div><input type="text" name="phone" placeholder="98765432"><br></div></td></tr>
				<tr><td><div>Email:</div></td></tr>
				<tr><td><div><input type="text" name="email" placeholder="ola.nordmann@gmail.com"><br></div></td></tr>			
				<tr><td><div>Første gang aktiv:</div></td></tr>
				<tr><td><div><input type="number" name="birth" placeholder="2006"><br></div></td></tr>
				
				<tr><td><div>Aktiv:</div></td></tr>
				<tr><td><div>
				<select name="aktiv">
				<option value="1">Ja</option>
				<option value="0">Nei</option>
				</select>
				<br></div></td></tr>
				
				<tr><td><div>Kontaktperson fornavn:</div></td></tr>
				<tr><td><div><input type="text" name="firstnameK" placeholder="Kari"><br></div></td></tr>
				<tr><td><div>Kontaktperson etternavn:</div></td></tr>
				<tr><td><div><input type="text" name="surnameK" placeholder="Nordmann"><br></div></td></tr>
				<tr><td><div>Kontaktperson telefon:</div></td></tr>
				<tr><td><div><input type="number" name="phoneK" placeholder="98765432"><br></div></td></tr>
				<tr><td><div>Kontaktperson email:</div></td></tr>
				<tr><td><div><input type="text" name="emailK" placeholder="kari.nordmann@gmail.com"><br></div></td></tr>
				
				<tr><td><div><input type="submit" name="leggtil" value="Legg til"></div></td></tr>
				<tr><td><div><br></div></td></tr>
			</form>
			</table>	
		</div>
		<?php

		if(isset($_POST["leggtil"]))
		{
			include 'connectToDatabase.php';

			$connection->set_charset("utf8");
			$fornavn = $_POST["firstName"];
			$etternavn = $_POST["surname"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];
			$hus = $_POST["idHouse"];


			$sql = "INSERT INTO students (firstName, surname, idHouse) VALUES ('$fornavn', '$etternavn', '$hus');";
			if($connection->query($sql))
			{
				echo('<div class="addedNew">');
				echo('<h3 class="headerFour">');
				echo("Added new student $fornavn $etternavn!");
				echo('</h3>');
				echo('</div>');

			}
			else{
				echo("Feil i brukerinput: " . mysqli_error($connection));
			}
		}
		?>
		
	</div>
	
</body>
</html>