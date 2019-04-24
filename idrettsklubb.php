<?php
 include "languages/config.php";
 ?>

<!doctype html>
<html lang="no">
<head>
<meta charset="utf-8">
<title>Idrettsklubb</title>
<link rel="stylesheet" href="css/stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="animated-scroll-anchor.js"></script>
<script src="scrollHide.js"></script>	
</head>
	
<body>
	<!-- Header starts -->	
	<nav class="nav one">
		<a class="current" href="idrettsklubb.php"><?php echo $lang['home'];?></a>
		<a href="kalender.html"><?php echo $lang['calender'];?></a>
		<img src="src/logo.png" alt="Logo" class="logo">
		<a href="historie.php"><?php echo $lang['history'];?></a>
		<a href="omOss.php"><?php echo $lang['about_us'];?></a>
	</nav>
	
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
	<!-- Wrapper starts -->
	<div id="wrapperOne">
	
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<iframe class="video"
		src="https://www.youtube.com/embed/4FMBadkqcRI">
		</iframe>
				
		<table class="News">
			  <tr>
				<th><?php echo $lang['news'];?></th>
			  </tr>
				<?php
				include 'admin/connectToDatabase.php';
					
					
				$sql = "SELECT * FROM News order by idNews desc limit 5";
				$results = $connection->query($sql);

				while($row = $results->fetch_assoc())
				{
					$title = $row['title'];
					$news = $row['news'];
					
					echo("
					<tr>
					<td><b>$title</b><br>$news</td>
					</tr>");
				}
					
				?>
		</table>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		<p class="ParagrafBottomForside">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nam, accusantium molestias culpa ducimus optio soluta placeat expedita rerum error cum temporibus dolor omnis ipsam delectus recusandae rem dolorum? Minus.</p>
		
		
		</div>
	<!-- Wrapper ends -->
	
	<!-- Footer -->	
	<footer class="footer one">

		<table class="CTA">
			<tr>
				<th><?php echo $lang['adress'];?></th>
				<th><?php echo $lang['mailadress'];?></th>
				<th><?php echo $lang['mailcity'];?></th>
				<th>Change language</th>
			</tr>
			<tr>
				<td>Øvre Fossum gård</td>
				<td>Fossumveien 81</td>
				<td>0988 Oslo</td>
				<td><a href="idrettsklubb.php?lang=no">Norwegian</a> | <a href="idrettsklubb.php?lang=en">English</a></td>
			</tr>
		</table>
	</footer>
	<!-- Footer ends -->
</body>
</html>