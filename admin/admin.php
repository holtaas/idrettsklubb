<?php require ('headerAdmin.php'); ?>
	
	
	<div class="nav">
		<img src="src/admin.png" alt="admin" class="logo">
		<ul>
		<li id="current"><a href="admin.php">Intro</a></li>
		<li><a href="nyhetsfeedAdmin.php">Nyhetsfeed</a></li>
		<li><a href="kalenderAdmin.php">Kalender</a></li>
		<li><a href="medlemmerAdmin.php">Medlemmer</a></li>
		<li><a href="nyttMedlemAdmin.php">Nytt medlem</a></li>
		<li><a href="aktivAdmin.php">Rediger medlem</a></li>
		</ul>
	</div>
		
	<div class="wrapper">
	<?php 
		if (isset($_SESSION['username'])){
			echo ('
				<h1>Bruksanvisning</h1>
				<p>På denne siden har du mulighet til å administrere Arnis Huertes hjemmeside. Til venstre på siden har du muligheten til å navigere deg gjennom redigeringsalternativer for hjemmesiden. </p>
			');
		}
		else {
		echo(" <p class='login-status'> Du er ikke logget inn! </p>");
		}
	?>
	
	</div>

</body>
</html>