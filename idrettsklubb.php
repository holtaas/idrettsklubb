<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Idrettsklubb</title>
<link rel="stylesheet" href="css/stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="animated-scroll-anchor.js"></script>
</head>
	
<body>
<div>
	<!-- Header starts -->	
	<div class="header">
		<nav class="nav one">
			<a class="current" href="idrettsklubb.php">HJEM</a>
			<a href="kalender.html">KALENDER</a>
			<img src="src/logo.png" alt="Logo" class="logo">
			<a href="historie.php">HISTORIE</a>
			<a href="omOss.php">OM OSS</a>
		</nav>
	</div>
	<!-- Header ends -->	
	
	<!-- Index starts -->
	<div class="parallax index">
	<div class="text">
	<h1>STICK-FIGHTING OSLO</h1>
	<h2>Eskrima - Arnis - Kali</h2>
	</div>
	<a href="#wrapperOne" class="scroll-down"><img src="src/buttondown.png" alt="scroll-down" class="buttondown"></a>
	<!-- Index ends -->
	</div>
	</div>
	<!-- Wrapper starts -->
	<div id="wrapperOne">
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<iframe class="video"
		src="https://www.youtube.com/embed/4FMBadkqcRI">
		</iframe>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<table class="News">
			  <tr>
				<th>Nyheter</th>
			  </tr>
				<?php
				
				$server = "elevweb.akershus-fk.no";
				$user = "aajo2108";
				$password = "aajo21081234";
				$database = "aajo2108_idrettslag";

				$connection = new MySQLi($server, $user, $password, $database);
				if($connection -> connect_error)
				{
					die("Connection failed ".$connection->connect_error);
				}
				else
				{
					//echo("Connection Successfull"); 
				}
				$connection->set_charset("utf8");
					
					
				$sql = "SELECT * FROM aajo2108_idrettslag.News order by idNews desc limit 5";
				$results = $connection->query($sql);

				while($row = $results->fetch_assoc())
				{
					echo("<tr>");
					echo("<td>");
					echo($row["news"]);
					echo("</td>");
					echo("</tr>");
				}
					
				?>
		</table>
		</div>
	<!-- Wrapper ends -->
	
	<!-- Footer -->	
	<footer class="footer one">
		<p>HoltAas &copy; 2019</p>
	</footer>
	<!-- Footer ends -->
</body>
</html>