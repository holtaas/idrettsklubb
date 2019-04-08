y<!doctype html>
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
		<li><a href="aktivAdmin.php">Rediger medlem</a></li>
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
					
					echo("
					<tr>
					<td>$fornavn</td>
					<td>$etternavn</td>
					<td>$birth</td>
					<td>");
					if (($gender) == 1) {echo("Male");}	
					else {echo("Female");}
					echo("
					</td>
					<td>$telefon</td>			
					<td>$adress</td>				
					<td>$email</td>
					<td>$start</td>
					<td>");
					if (($aktiv) == 1) {echo("Ja");}	
					else {echo("Nei");}
					echo("
					</td>
					<td>$fornavnK</td>
					<td>$etternavnK</td>
					<td>$telefonK</td>
					<td>$emailK</td>
					<td>$beltegrad</td>
					<td>$graderingsdato</td>
					</tr>");
				}
			
				?>
				
				
		</table>
		
	</div>
	
</body>
</html>