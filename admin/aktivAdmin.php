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
		<li><a href="medlemmerAdmin.php">Medlemmer</a></li>
		<li><a href="nyttMedlemAdmin.php">Nytt medlem</a></li>
		<li id="current"><a href="aktivAdmin.php">Aktiv/Slett</a></li>
		</ul>
	</div>
		
	<div class="wrapper">
	<h1>Aktiv/Slett</h1>
	<p>Her kan du redigere hvem som er aktive medlemmer i klubben.</p>
		<table class="tabellMedlemmer">
				
				<tr>
				<th>Fornavn</th>
				<th>Etternavn</th>
				<th>Fødselsdato</th>
				<th>Telefon</th>
				<th>Aktiv</th>
				<th>Rediger</th>
				<th>Slett</th>
				
				</tr>
				<?php
				include 'connectToDatabase.php';
		
			
				$sql = "SELECT * FROM Members";
				$results = $connection->query($sql);

				while($row = $results->fetch_assoc())
				{	
					$idMembers = $row["idMembers"];
					$fornavn = $row["firstname"];
					$etternavn = $row["surname"];
					$birth = $row["birth"];
					$telefon = $row["phoneNumber"];
					$aktiv = $row["active"];
					
					echo("
					<tr>
					<td>$fornavn</td>
					<td>$etternavn</td>
					<td>$birth</td>
					<td>$telefon</td>
					<td>");
					if (($aktiv) == 1) {echo("Ja");}	
					else {echo("Nei");}
					echo("</td>");
					
					echo"
					<td><a href='update.php?idMembers=$idMembers'>Update</td>
					<td><form method='POST' action=''><button name='ID' method='POST' type='submit' value='$idMembers'>Slett</button></form></td>
					</tr>";
				}
				
			if(isset($_POST["ID"])) 
			{
				$slette = $_POST["ID"];
				$sql = "DELETE FROM Members WHERE idMembers='$slette'";
				if ($connection->query($sql) === TRUE) 
				{ 
					echo ("Record was deleted successfully"); 
				}  
				else
				{ 
					echo("Feil i spørring: " . mysqli_error($connection)); 
				} 

			}
				?>
				
				
		</table>
		
	</div>
	
</body>
</html>