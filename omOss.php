<?php require('header.php'); ?>
	<!-- Header starts -->	
	<nav class="nav one">
		<a href="idrettsklubb.php"><?php echo $lang['home'];?></a>
		<a href="kalender.php"><?php echo $lang['calender'];?></a>
		<img src="src/logo.png" alt="Logo" class="logo">
		<a href="historie.php"><?php echo $lang['history'];?></a>
		<a class="current" href="omOss.php"><?php echo $lang['about_us'];?></a>
	</nav>
	<!-- Header ends -->	
	
	<!-- Wrapper starts -->
	<div class="wrapper">

		<h1 class="overskrift1OmOss"><?php echo $lang['o1'];?></h1>
		<table class="Trenere">
			<tr>
				<th><?php echo $lang['o2'];?></th>
				<th><?php echo $lang['o3'];?></th>
				<th><?php echo $lang['o4'];?></th>
				<th><?php echo $lang['o5'];?></th>
			</tr>
			<?php
				include 'connectToDatabase.php';
		
				$sql = "SELECT Members.idMembers, Members.firstname, Members.surname, BeltDegree.name, Coach.title, Coach.image FROM Role LEFT JOIN Coach ON Role.idRole = Coach.idRole LEFT JOIN Members ON Coach.idMembers = Members.idMembers LEFT JOIN Graduation ON Members.idMembers = Graduation.idMembers LEFT JOIN BeltDegree ON Graduation.idBeltDegree = BeltDegree.idBeltDegree order by Members.firstname, Graduation.idBeltDegree desc";
				
					if($results = $connection->query($sql))
					{
						
					}
					else
					{
						echo("Feil i brukerinput: " . mysqli_error($connection));
					}


				while($row = $results->fetch_assoc())
				{
					$idMembers = $row['idMembers'];
					$fornavn = $row['firstname'];
					$etternavn = $row['surname'];
					$beltegrad = $row['name'];
					$title = $row['title'];
					$bilde = $row['image'];
					
					if($tempIdMembers != $idMembers) {
				
					echo("
						<tr>
							<td>$title</td>
							<td>$fornavn $etternavn</td>
							<td>$beltegrad</td>
							<td><img src='$bilde'></td>
						</tr>
						");
					}
				
					$tempIdMembers = $idMembers;
				}
				?>
		
		</table>
		
		<h1 class="overskriftOmOss"><?php echo $lang['o6'];?></h1>
		<table class="Stilart">
			<tr>
				<th><?php echo $lang['o7'];?></th>
			</tr>
			<tr>
				<td>AFC</td>
			</tr>
			<tr>
				<td>Amarra Fighting Concept</td>
			</tr>
			<tr>
				<td>Filipino Martial Arts</td>
			</tr>

		</table>
		
		<h1 class="overskriftOmOss"><?php echo $lang['o8'];?></h1>
		<h3 class="overskriftOmOss">GSBA - Global stick and blade aliance</h3>
		<p>	<b><?php echo $lang['o9'];?></b> <?php echo $lang['o10'];?>
		<br>
		<br>
		<b>Single stick:</b> <?php echo $lang['o11'];?>
		<br>
		<br>
		<b>Double stick:</b> <?php echo $lang['o12'];?>
		<br>
		<br>
		<b>Single stick padded:</b> <?php echo $lang['o13'];?>
		<br>
		<br>
		<b>Multiple weapon padded:</b> <?php echo $lang['o14'];?>
		<br>
		<br>
		<b>Team fight:</b> <?php echo $lang['o15'];?>
		</p>
		
		<h3 class="overskriftOmOss">WEKAF - World Eskrima Kali Arnis Federation</h3>
		
		<p>
		<?php echo $lang['o16'];?>
		<br>
		<br>
		<b><?php echo $lang['o17'];?></b> <?php echo $lang['o18'];?>
		<br>
		<br>
		<b>Knife padded:</b> <?php echo $lang['o19'];?>
		<br>
		<br>
		<b>Bankaw:</b> <?php echo $lang['o20'];?> 
		</p>
		
		<h1 class="overskriftOmOss"><?php echo $lang['o21'];?></h1>
		
		<div class="galleri">

		<div class="responsive">
 		 <div class="gallery">
    	<a target="_blank" href="src/bilde1.jpg">
      	<img src="src/bilde1.jpg" alt="missing">
    	</a>
    	<div class="desc"><?php echo $lang['o22'];?></div>
  		</div>
		</div>


		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde2.jpg">
     			 <img src="src/bilde2.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde3.jpg">
     			 <img src="src/bilde3.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde4.jpg">
     			 <img src="src/bilde4.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde5.jpg">
     			 <img src="src/bilde5.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde7.jpg">
     			 <img src="src/bilde7.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde8.jpg">
     			 <img src="src/bilde8.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde9.jpg">
     			 <img src="src/bilde9.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde10.jpg">
     			 <img src="src/bilde10.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde11.jpg">
     			 <img src="src/bilde11.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde12.jpg">
     			 <img src="src/bilde12.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde13.jpg">
     			 <img src="src/bilde13.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde14.jpg">
     			 <img src="src/bilde14.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
		
		<div class="responsive">
  			<div class="gallery">
   				 <a target="_blank" href="src/bilde15.jpg">
     			 <img src="src/bilde15.jpg" alt="missing">
    			</a>
    		<div class="desc"><?php echo $lang['o23'];?></div>
  			</div>
		</div>
			
		</div>
		
	</div>
	<!-- Wrapper ends -->
	
	<!-- Footer -->	
	<?php require('footer.php'); ?>
	<!-- Footer ends -->
</body>
</html>