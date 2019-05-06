<?php require('header.php'); ?>
	<!-- Header starts -->	
	<nav class="nav one">
		<a class="current" href="idrettsklubb.php"><?php echo $lang['home'];?></a>
		<a href="kalender.php"><?php echo $lang['calender'];?></a>
		<img src="src/logo.png" alt="Logo" class="logo">
		<a href="historie.php"><?php echo $lang['history'];?></a>
		<a href="omOss.php"><?php echo $lang['about_us'];?></a>
	</nav>
	
	<!-- Header ends -->	
	
	<!-- Index starts -->
	<div class="index">
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
	<?php require('footer.php'); ?>
	<!-- Footer ends -->
</body>
</html>