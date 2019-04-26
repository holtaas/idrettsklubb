<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?Php
	
$server = "elevweb.akershus-fk.no";
$username = "aajo2108";
$password = "aajo21081234";
$database = "aajo2108_idrettslag";

try {
$dbo = new PDO('mysql:host='.$server.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

	

?>
</body>
</html>