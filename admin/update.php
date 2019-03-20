<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
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
?>
</body>
</html>