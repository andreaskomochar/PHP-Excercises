<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Spremenljivke streznika</title>
	</head>
	<body>
		<?php
			foreach($_SERVER as $ime => $vrednost){
				echo "<p>Ime = $ime, Vrednost = $vrednost</p>";
			}
			?>	
		<a href="index.php">Nazaj</a>
	</body>
</html>