<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connectToDatabase.php';

	if(isset($_GET["idMembers"]))	
	{
		$idMembers = $_GET["idMembers"];
	}
	else
	{
		die("Må sende medlemsID");
	}
	
	$sql = "SELECT * FROM Members WHERE idMembers = $idMembers";
	
		if($results = $connection->query($sql))
		{
		
		}
		else
		{
		echo("Feil i brukerinput: " . mysqli_error($connection));
		}	
	
	while($row = $results->fetch_assoc())
	{
		$idMembers = $row["idMembers"];
		$fornavn = $row["firstname"];
		$etternavn = $row["surname"];
		$birth = $row["birth"];
		$telefon = $row["phoneNumber"];
		$aktiv = $row["active"];

		echo("	
			<form method='POST'>
				Fornavn:<br>
				<input type='text' name='firstname' value='$fornavn'><br>
				Etternavn:<br>
				<input type='text' name='surname' value='$etternavn'><br>
				Født:<br>
				<input type='text' name='birth' value='$birth'><br>
				Telefon:<br>
				<input type='number' name='phoneNumber' value='$telfon'><br>
				Aktiv:<br>
				<input type='radio' name='aktiv' value='$aktiv'><br>
				
				<input type='submit' name='Oppdater' value='Oppdater'>
			</form>
		");
	}
	
	if(isset($_POST["Oppdater"]))
	{
		$fornavn = $_POST["fornavn"];
		$etternavn = $_POST["etternavn"];
		$fAAr = $_POST["født"];
		
		$sql = "UPDATE Medlem
				SET fornavn = '$fornavn', etternavn = '$etternavn', født = '$fAAr'
				WHERE ID_medlem = $ID_medlem;";

			if($connection->query($sql))
			{
				header('Location: updateDelete.php'); 

			}
			else{
				echo("Error description: " . mysqli_error($connection));
			}	
	}	
	?>
</body>
</html>