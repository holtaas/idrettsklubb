<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php 
include 'connectToDatabase.php';

	/* $sql= "INSERT INTO login(username, password) VALUES ('admin', 'admin');";
	$results = $connection->query($sql);
	
	if($connection->query($sql))
			{ 
			}
			else{
				echo("Feil i brukerinput: " . mysqli_error($connection));
			}
*/
	$sql= "SELECT * FROM login";
	$results = $connection->query($sql);
	
	while($row = $results->fetch_assoc())
	{
	$username = $row["username"];
	$password = $row["password"];
		echo("Brukernavnet er: $username, og passordet er: $password.");
	}
?>
<body>
</body>
</html>