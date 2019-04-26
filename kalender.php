<?php require('header.php'); ?>
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
	<?php require('footer.php'); ?>
	<!-- Footer ends -->
</body>
</html>
