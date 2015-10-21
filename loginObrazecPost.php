<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Obrazec POST</title>
	</head>
	<body>
		<?php
			if (isset($_POST['ime'])&& isset($_POST['geslo'])) {
				echo "<h3>Zahtevek je bil poslan po metodi POST</h3>";
				echo "<p>Uporabnisko ime: " . $_POST['ime'] . "</p>";
				echo "<p>Geslo: " . $_POST['geslo'] . "</p>";
			} 
		?>	
		<a href="index.php">Nazaj</a>
	</body>
</html>