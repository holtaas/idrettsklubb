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
				<th>Beltegrad</th>
				<th>Graderingsdato</th>
				
				</tr>
				<?php
				include 'connectToDatabase.php';
		
				$sql = "SELECT firstname, Members.surname, Members.birth, Members.gender, Members.phoneNumber, Members.adress, Members.email, Members.start, Members.active, contactPerson.firstnameK, contactPerson.surnameK, contactPerson.phoneNumberK, contactPerson.emailK, BeltDegree.name, Graduation.graduationDate FROM contactPerson LEFT JOIN Members ON contactPerson.idcontactPerson = Members.contactPerson_idcontactPerson LEFT JOIN Graduation ON Members.idMembers = Graduation.idMembers LEFT JOIN BeltDegree ON Graduation.idBeltDegree = BeltDegree.idBeltDegree";
				
					if($results = $connection->query($sql))
					{
						
					}
					else
					{
						echo("Feil i brukerinput: " . mysqli_error($connection));
					}


				while($row = $results->fetch_assoc())
				{
					
					$idMembers = $row['idMembers'];
					$fornavn = $row['firstname'];
					$etternavn = $row['surname'];
					$birth = $row['birth'];
					$gender = $row['gender'];
					$telefon = $row['phoneNumber'];
					$adress = $row['adress'];
					$email = $row['email'];
					$start = $row['start'];
					$aktiv = $row['active'];

					$fornavnK = $row['firstnameK'];
					$etternavnK = $row['surnameK'];
					$telefonK = $row['phoneNumberK'];
					$emailK = $row['emailK'];
					
					$beltegrad = $row['name'];
					$graderingsdato = $row['graduationDate'];
					
					echo("<tr>");
					echo("<td>");
					echo($fornavn);
					echo("</td>");
					
					echo("<td>");
					echo($etternavn);
					echo("</td>");
					
					echo("<td>");
					echo($birth);
					echo("</td>");
					
					echo("<td>");
					if (($gender) == 1) {echo("Male");}	
					else {echo("Female");}
					echo("</td>");
					
					echo("<td>");
					echo($telefon);
					echo("</td>");
									
					echo("<td>");
					echo($adress);
					echo("</td>");
										
					echo("<td>");
					echo($email);
					echo("</td>");
					
					echo("<td>");
					echo($start);
					echo("</td>");
					
					echo("<td>");
					if (($aktiv) == 1) {echo("Ja");}	
					else {echo("Nei");}
					echo("</td>");
					
					echo("<td>");
					echo($fornavnK);
					echo("</td>");
					
					echo("<td>");
					echo($etternavnK);
					echo("</td>");
					
					echo("<td>");
					echo($telefonK);
					echo("</td>");
					
					echo("<td>");
					echo($emailK);
					echo("</td>");
					
					echo("<td>");
					echo($beltegrad);
					echo("</td>");
					
					echo("<td>");
					echo($graderingsdato);
					echo("</td>");
					echo("</tr>");

				}
			
				?>
				
				
		</table>
		
	</div>
	
</body>
</html>