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
				");
			if($aktiv==1) {
				echo("
				<select name='active'>
				<option selected value='1'>Aktiv</option>
				<option value='0'>Ikke aktiv</option>
				</select><br>
				");
			} else {
				echo("
				<select name='active'>
				<option value='1'>Aktiv</option>
				<option selected value='0'>Ikke aktiv</option>
				</select><br>
				");
			}
		
				
				
			echo("<input type='submit' name='Oppdater' value='Oppdater'>
			</form>
			");
	}
	
	if(isset($_POST["Oppdater"]))
	{
		$fornavn = $_POST["firstname"];
		$etternavn = $_POST["surname"];
		$birth = $_POST["birth"];
		$telefon = $_POST["phoneNumber"];
		$aktiv = $_POST["active"];
		
		$sql = "UPDATE Members
				SET firstname = '$fornavn', surname = '$etternavn', birth = '$birth',  phoneNumber = '$telefon',  active = '$aktiv'
				WHERE idMembers = $idMembers;";

			if($connection->query($sql))
			{
				header('Location: aktivAdmin.php'); 

			}
			else{
				echo("Error description: " . mysqli_error($connection));
			}	
	}	
	?>
</body>
</html>