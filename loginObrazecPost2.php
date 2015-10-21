<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Obrazec POST</title>
	</head>
	<body>
		<?php
			foreach ($_POST as $naslov => $vrednost){
				echo "<p>Naslov: $naslov, Vrednost: $vrednost</p>";
			}
			
			echo "<h3>Uporabnisko ime je {$_POST['ime']}</h3>";
			echo "<h3>Geslo je {$_POST['geslo']}</h3>";
		?>	
		<a href="index.php">Nazaj</a>
	</body>
</html>