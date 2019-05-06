<?php require ('headerAdmin.php'); ?>
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
			$fornavn = $row["firstname"];
			$etternavn = $row["surname"];
			echo("<h1>$fornavn $etternavn</h1>");
		}


		$sql = "SELECT BeltDegree.name, Graduation.graduationDate FROM Graduation LEFT JOIN BeltDegree ON Graduation.idBeltDegree = BeltDegree.idBeltDegree WHERE Graduation.idMembers = $idMembers";
		if($results = $connection->query($sql))
		{
		
		}
		else
		{
		echo("Feil i brukerinput: " . mysqli_error($connection));
		}	
		
		echo("
		<table>
			<tr>
				<th>Belter</th>
				<th>Graderingsdato</th>
			</tr>
		
		");
		while($row = $results->fetch_assoc())
		{
			$beltegrad = $row['name'];
			$graduationDate = $row["graduationDate"];
			echo("
				<tr>
					<td>$beltegrad</td>
					<td>$graduationDate</td>
				</tr>
				");
		}
	
		echo("</table>");
		
	?>
	<button><a href="medlemmerAdmin.php">Tilbake</a></button>
	
</body>
</html>