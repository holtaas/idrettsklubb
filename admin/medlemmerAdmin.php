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
		<li><a href="nyhetsfeedAdmin.php">Nyhetsfeed</a></li>
		<li><a href="kalenderAdmin.php">Kalender</a></li>
		<li id="current"><a href="medlemmerAdmin.php">Medlemmer</a></li>
		<li><a href="nyttMedlemAdmin.php">Nytt medlem</a></li>
		<li><a href="aktivAdmin.php">Aktiv/Slett</a></li>
		</ul>
	</div>
		
	<div class="wrapper" > 
	<h1>Medlemmer</h1>
	<p>Her får du en oversikt over alle medlemmene i klubben!</p>
	
	<table class="tabellMedlemmer">
				
				<tr>
				<th>Fornavn</th>
				<th>Etternavn</th>
				<th>Fødselsdato</th>
				<th>Kjønn</th>
				<th>Telefon</th>
				<th>Adresse</th>
				<th>Email</th>
				<th>Første gang aktiv</th>
				<th>Aktiv</th>
				<th>Kontaktperson fornavn</th>
				<th>Kontaktperson etternavn</th>
				<th>Kontaktperson telefon</th>
				<th>Kontaktperson email</th>
				
				</tr>
				<?php
				include 'connectToDatabase.php';
		
				$sql = "SELECT Members.firstname, Members.surname, Members.birth, Members.gender, Members.phoneNumber, Members.adress, Members.email, Members.start, Members.active, contactPerson.firstnameK, contactPerson.surnameK, Members.phoneNumber, contactPerson.email
				FROM Members
				LEFT JOIN contactPerson ON Members.idMembers=contactPerson.idcontactPerson;";
				$results = $connection->query($sql);

				while($row = $results->fetch_assoc())
				{
					echo("<tr>");
					echo("<td>");
					echo($row["firstname"]);
					echo("</td>");
					
					echo("<td>");
					echo($row["surname"]);
					echo("</td>");
					
					echo("<td>");
					echo($row["birth"]);
					echo("</td>");
					
					echo("<td>");
					if (($row["gender"]) == 1) {echo("Male");}	
					else {echo("Female");}
					echo("</td>");
					
					echo("<td>");
					echo($row["phoneNumber"]);
					echo("</td>");
									
					echo("<td>");
					echo($row["adress"]);
					echo("</td>");
										
					echo("<td>");
					echo($row["email"]);
					echo("</td>");
					
					echo("<td>");
					echo($row["start"]);
					echo("</td>");
					
					echo("<td>");
					if (($row["active"]) == 1) {echo("Ja");}	
					else {echo("Nei");}
					echo("</td>");
					
					echo("<td>");
					echo($row["firstnameK"]);
					echo("</td>");
					
					echo("<td>");
					echo($row["surnameK"]);
					echo("</td>");
					
					echo("<td>");
					echo($row["phoneNumber"]);
					echo("</td>");
					
					echo("<td>");
					echo($row["email"]);
					echo("</td>");
					echo("</tr>");

				}
			
				?>
				
				
		</table>
		
	</div>
	
</body>
</html>