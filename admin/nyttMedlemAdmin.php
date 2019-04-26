<?php require ('headerAdmin.php'); ?>
	<div class="nav">
		<img src="src/admin.png" alt="admin" class="logo">
		<ul>
		<li><a href="admin.php">Intro</a></li>
		<li><a href="nyhetsfeedAdmin.php">Nyhetsfeed</a></li>
		<li><a href="kalenderAdmin.php">Kalender</a></li>
		<li><a href="medlemmerAdmin.php">Medlemmer</a></li>
		<li id="current"><a href="nyttMedlemAdmin.php">Nytt medlem</a></li>
		<li><a href="aktivAdmin.php">Rediger medlem</a></li>
		</ul>
	</div>
		
	<div class="wrapper">
	<h1>Nytt medlem</h1>
		<p>Her kan du legge til nye medlemmer til klubben!</p>
			<table id="nyttMedlemtableOne">
			<form method="POST">	
				<tr><td><div>Fornavn:</div></td></tr>
				<tr><td><div><input type="text" name="fornavn" placeholder="Ola"></div></td></tr>
				<tr><td><div>Etternavn:</div></td></tr>
				<tr><td><div><input type="text" name="etternavn" placeholder="Nordmann"></div></td></tr>
				<tr><td><div>Fødselsdato:</div></td></tr>
				<tr><td><div><input type="date" name="birth" placeholder="2000-01-18"><br></div></td></tr>
				
				<tr><td><div>Kjønn:</div></td></tr>
				<tr><td><div>
				<select name="gender">
				<option value="0">Kvinne</option>
				<option value="1">Mann</option>
				</select>
				<br></div></td></tr>
				
				<tr><td><div>Telefon:</div></td></tr>
				<tr><td><div><input type="number" name="phone" placeholder="98765432"><br></div></td></tr>
				<tr><td><div>Adresse:</div></td></tr>
				<tr><td><div><input type="text" name="adress" placeholder="Katteveien 1"><br></div></td></tr>
				<tr><td><div>Email:</div></td></tr>
				<tr><td><div><input type="text" name="email" placeholder="ola.nordmann@gmail.com"><br></div></td></tr>	
				<tr><td><div>Beltegrad:</div></td></tr>
				<tr><td><div>
				<?php
				include 'connectToDatabase.php';
				$sql = "SELECT * FROM BeltDegree";
				$result = $connection->query($sql);
				echo "<select name='idBeltDegree'>";
				while($row = $result->fetch_assoc()) {
					$idBeltDegree = $row["idBeltDegree"];
					$name = $row["name"];
					
					echo "<option value=$idBeltDegree>$name</option>";
				}
				echo "</select>";
				?>
				<br></div></td></tr>
				</table>
				
				<table id="nyttMedlemtableTwo" style="margin: 0 auto;">
				<tr><td><div>Graderingsdato:</div></td></tr>
				<tr><td><div><input type="date" name="graduationDate" placeholder="2000-01-18"><br></div></td></tr>
				<tr><td><div>Første gang aktiv:</div></td></tr>
				<tr><td><div><input type="number" name="aktivF" placeholder="2006"><br></div></td></tr>
				<tr><td><div>Aktiv:</div></td></tr>
				<tr><td><div>
				<select name="aktiv">
				<option value="1">Ja</option>
				<option value="0">Nei</option>
				</select>
				<br></div></td></tr>
				
				<tr><td><div>Kontaktperson fornavn:</div></td></tr>
				<tr><td><div><input type="text" name="firstnameK" placeholder="Kari"><br></div></td></tr>
				<tr><td><div>Kontaktperson etternavn:</div></td></tr>
				<tr><td><div><input type="text" name="surnameK" placeholder="Nordmann"><br></div></td></tr>
				<tr><td><div>Kontaktperson telefon:</div></td></tr>
				<tr><td><div><input type="number" name="phoneK" placeholder="98765432"><br></div></td></tr>
				<tr><td><div>Kontaktperson email:</div></td></tr>
				<tr><td><div><input type="text" name="emailK" placeholder="kari.nordmann@gmail.com"><br></div></td></tr>
				
				<tr><td><div><input type="submit" name="leggtil" value="Legg til"></div></td></tr>
				<tr><td><div><br></div></td></tr>
			</form>
			</table>	

		<?php

		if(isset($_POST["leggtil"]))
		{
			include 'connectToDatabase.php';

			$fornavn = $_POST["fornavn"];
			$etternavn = $_POST["etternavn"];
			$fodselsdato = $_POST["birth"];
			$kjonn = $_POST["gender"];
			$telefon = $_POST["phone"];
			$adresse = $_POST["adress"];
			$email = $_POST["email"];
			$aktivF = $_POST["aktivF"];
			$aktiv = $_POST["aktiv"];
			$fornavnK = $_POST["firstnameK"];
			$etternavnK = $_POST["surnameK"];
			$telefonK = $_POST["phoneK"];
			$emailK = $_POST["emailK"];
			$idBeltDegree = $_POST["idBeltDegree"];
			$graduationDate = $_POST["graduationDate"];


			$sql = "INSERT INTO contactPerson (firstnameK, surnameK, phoneNumberK, emailK) VALUES ('$fornavnK', '$etternavnK', '$telefonK', '$emailK');";
			if($connection->query($sql))
			{ 
			}
			else{
				echo("Feil i brukerinput: " . mysqli_error($connection));
			}
			
			$sql = "SELECT idcontactPerson FROM contactPerson order by idcontactPerson desc limit 1";
				$results = $connection->query($sql);

				while($row = $results->fetch_assoc())
				{
					$idKP=($row["idcontactPerson"]);
				}
			
			
			
			$sql = "INSERT INTO Members (firstname, surname, gender, birth, start, active, email, phoneNumber, adress, contactPerson_idcontactPerson) VALUES ('$fornavn', '$etternavn', '$kjonn', '$fodselsdato', '$aktivF', '$aktiv', '$email', '$telefon', '$adresse', '$idKP' );";
			if($connection->query($sql))
			{
				

			}
			else{
				echo("Feil i brukerinput: " . mysqli_error($connection));
			}
			
			$sql = "SELECT idMembers FROM Members order by idMembers desc limit 1";
				$results = $connection->query($sql);

				while($row = $results->fetch_assoc())
				{
					$idMembers=($row["idMembers"]);
				}
			
			$sql = "INSERT INTO Graduation (idMembers, idBeltDegree, graduationDate) VALUES ('$idMembers', '$idBeltDegree', '$graduationDate');";
			if($connection->query($sql))
			{
				echo('<div class="addedNew">');
				echo('<h3 class="headerFour">');
				echo("La til nytt medlem: $fornavn $etternavn!");
				echo('</h3>');
				echo('</div>');
			}
			else{
				echo("Feil i brukerinput: " . mysqli_error($connection));
			}
		}
		?>
		
	</div>
	
</body>
</html>