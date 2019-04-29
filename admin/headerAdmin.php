<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	
	<header>
		<nav class="navLogin">
			<?php if (isset($_SESSION['username'])){
			echo ('
			<form action="includes/logout.inc.php" method="post">
				<div class="logininfo"><p>Klikk her for å logge ut:    </p><button type="submit" name="logout-submit" class="logout">Log Out</button></div>
			</form>
			');
			}
			else {
				echo('
			<form action="includes/login.inc.php" method="post">
			<div class="logininfo"><img src="src/username.png" alt="username"><input type="text" name="username" placeholder="Brukernavn"></div>
			<div class="logininfo"><img src="src/password.png" alt="password"><input type="password" name="password" placeholder="Passord">
			<button type="submit" name="login-submit">Login</button></div>
			</form>
			');
			}
			?>
			
			
		</nav>
	</header>
