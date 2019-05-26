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


		$sql = "SELECT BeltDegree.name, Graduation.graduationDate, Graduation.idBeltDegree FROM Graduation LEFT JOIN BeltDegree ON Graduation.idBeltDegree = BeltDegree.idBeltDegree WHERE Graduation.idMembers = $idMembers";
		if($results = $connection->query($sql))
		{
		
		}
		else
		{
		echo("Feil i brukerinput: " . mysqli_error($connection));
		}	
		
		echo("
		<form method='POST'>
		<table>
			<tr>
				<th>Belter</th>
				<th>Graderingsdato</th>
				<th>Slett</th>
			</tr>
		
		");
		while($row = $results->fetch_assoc())
		{
			$beltegrad = $row['name'];
			$graduationDate = $row["graduationDate"];
			$idbelterad = $row["idBeltDegree"];
			echo("
				<tr>
					<td>
					");
				
				$sql = "SELECT * FROM BeltDegree";
				$result = $connection->query($sql);
				echo "<select name='idBeltDegree'>";
				while($row = $result->fetch_assoc()) {
					$idBeltDegree = $row["idBeltDegree"];
					$name = $row["name"];
					$selected = '';
					
					if($name == $beltegrad)
					{ $selected = 'selected'; 
					}				
					echo "<option $selected value=$idBeltDegree>$name</option>";
				}
				echo ("</select>
					</td>
					<td><input type='date' name='graduationDate' value='$graduationDate'></td>
					<td><button name='slett' method='POST' type='submit' value='$idbelterad'>Slett</button></td>
				</tr>
				");
		}
	
		echo("
		</table>
		<input type='submit' name='Oppdater' value='Oppdater'>
		</form>
		");

	if(isset($_POST["Oppdater"]))
	{
		$beltegrad = $_POST["idBeltDegree"];
		$dato = $_POST["graduationDate"];
		
		
		
		$sql = "UPDATE Graduation
				SET idBeltDegree = '$beltegrad', graduationDate = '$dato'
				WHERE idMembers = '$idMembers' AND idBeltDegree = '$idbelterad';";

			if($connection->query($sql))
			{
				echo "<meta http-equiv='refresh' content='0'>";

			}
			else{
				echo("Error description: " . mysqli_error($connection));
			}	
		
	}

	if(isset($_POST["slett"])) 
			{
				$sql = "DELETE FROM Graduation WHERE idMembers = '$idMembers' AND idBeltDegree = '$idbelterad'";
				if ($connection->query($sql) === TRUE) 
				{ 
					 echo "<meta http-equiv='refresh' content='0'>";
				}  
				else
				{ 
					echo("Feil i spørring: " . mysqli_error($connection));
				} 
			}
		
	?>
	<button><a href="medlemmerAdmin.php">Tilbake</a></button>
	
</body>
</html>