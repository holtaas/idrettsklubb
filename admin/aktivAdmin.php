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
		<li id="current"><a href="aktivAdmin.php">Aktiv</a></li>
		</ul>
	</div>
		
	<div class="wrapper">
	<h1>Aktiv</h1>
	<p>Her kan du redigere hvem som er aktive medlemmer i klubben.</p>
		<table class="tabellMedlemmer">
				
				<tr>
				<th>Fornavn</th>
				<th>Etternavn</th>
				<th>Fødselsdato</th>
				<th>Telefon</th>
				<th>Aktiv</th>
				<th>Aktiv</th>
				
				</tr>
				<?php
				include 'connectToDatabase.php';
		
				$sql = "SELECT * FROM aajo2108_idrettslag.Members";
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
					echo($row["phoneNumber"]);
					echo("</td>");
												
					if(isset($_POST["post"]))	{
						$aktiv = $_POST["aktivJaNei"];
						$sql = "UPDATE Members SET active='$aktiv' WHERE idMembers='$row[idMembers]'";
						$results = $connection->query($sql);
						if($connection->query($sql))
						{

						}
						else{
							echo("Error");
						}	
					}
				?>
				<td>
				<form name="aktivJaNei" method="POST">
				  <input type="checkbox" name="aktiv" value="1">Aktiv<br>
				  <input type="checkbox" name="ikkeAktiv" value="0">Ikke aktiv<br>
				  <input type="submit" name="post" value="Endre">
				</form>
				</td>
				<?php	
					echo("<td>");
					if (($row["active"]) == 1) {echo("Ja");}	
					else {echo("Nei");}
					echo("</td>");
					echo("</tr>");

				}
				?>
				
				
		</table>
		
	</div>
	
</body>
</html>