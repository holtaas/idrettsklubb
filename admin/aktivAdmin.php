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
				<th>Aktiv</th>
				<th>Slett</th>
				
				</tr>
				<?php
				include 'connectToDatabase.php';
		
			
				$sql = "SELECT * FROM aajo2108_idrettslag.Members";
				$results = $connection->query($sql);

				while($row = $results->fetch_assoc())
				{	
					$idMembers = $row["idMembers"];
					
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
					echo($row["phoneNumber"]);
					echo("</td>");
					
					
												
					if(isset($_POST["POST"]))	{
						$aktiv = $_POST["aktiv"];
						$idMembers = $row["idMembers"];
						$sql = "UPDATE Members SET active='$aktiv' WHERE idMembers='$idMembers';";
						$results = $connection->query($sql);
						if($connection->query($sql))
						{

						}
						else{
							echo("error");
						}	
					}
					echo("<td>");
				?>
				<form name="aktivJaNei" method="POST">
				  <input type="radio" name="aktiv" value="1">Aktiv<br>
				  <input type="radio" name="aktiv" value="0">Ikke aktiv<br>
				  <input type="submit" name="POST" value="Endre">
				</form>
				<?php	
					echo("</td>");
					echo("<td>");
					if (($row["active"]) == 1) {echo("Ja");}	
					else {echo("Nei");}
					echo("</td>");
					
					echo"<td>";
					echo"<form method='post'>";
					echo"<input type='hidden' name='slett_id' value='$idMembers'>";
					echo"<input type='submit' value='Slett' onClick='return confirm('Er du sikker på at du vil slette?')'>";
					echo"</td>";
					
					echo"</tr>";
				}
				if(isset($_POST["slett_id"])) {
				$slett_id = $_POST["slett_id"];
					include 'connectToDatabase.php';
				}	else {
					die("Du må angi et blad.");
				}

				$sql = "DELETE FROM Members WHERE idMembers='$slett_id'";

				$results = $connection->query($sql);

				if($connection->query($sql)){

				}
				else{
					echo("error");
				}
			
				?>
				
				
		</table>
		
	</div>
	
</body>
</html>