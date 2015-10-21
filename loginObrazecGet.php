<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Obrazec GET</title>
	</head>
	<body>
		<?php
			if (isset($_GET['ime'])&& isset($_GET['geslo'])) {
				echo "<h3>Zahtevek je bil poslan po metodi GET</h3>";
				echo "<p>Uporabnisko ime: " . $_GET['ime'] . "</p>";
				
				// Pri naslavljanju asociativnih polj lahko uporabimo zavite oklepaje, da nam ni
				// treba sestavljati stringa s piko.
				echo "<p>Geslo: {$_GET['geslo']}</p>";
			}
			?>	
		<a href="index.php">Nazaj</a>
	</body>
</html>