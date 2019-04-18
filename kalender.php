<?php
 include "languages/config.php";
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kalender</title>
<link rel="stylesheet" href="css/stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="animated-scroll-anchor.js"></script>
<script src="scrollHide.js"></script>
</head>
	
<body>
	<!-- Header starts -->	
	<nav class="nav one">
		<a href="idrettsklubb.php"><?php echo $lang['home'];?></a>
		<a class="current" href="kalender.php"><?php echo $lang['calender'];?></a>
		<img src="src/logo.png" alt="Logo" class="logo">
		<a href="historie.php"><?php echo $lang['history'];?></a>
		<a href="omOss.php"><?php echo $lang['about_us'];?></a>
	</nav>
	
	<!-- Header ends -->	
	
	<!-- Wrapper starts -->
	<div id="calender">
	<script src="https://calendar.time.ly/embed.js" data-src="https://calendar.time.ly/ykruke26/" id="timely_script" class="timely-script"></script>
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
				<td><a href="kalender.php?lang=no">Norwegian</a> | <a href="kalender.php?lang=en">English</a></td>
			</tr>
		</table>
	</footer>
	<!-- Footer ends -->
</body>
</html>
