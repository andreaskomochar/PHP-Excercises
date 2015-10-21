<?php
	// Ce piskotek ze obstaja, ga povecam, sicer pa ga nastavim na zacetno vrednost 
	if (isset($_COOKIE['uporabnik'])){
		$uporabnik = $_COOKIE['uporabnik'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cookie 2</title>
	</head>
	<body>
		<?php
			if (isset($uporabnik)) {
				echo "<p>Pozdravljen $uporabnik.</p>";
			} else {
				echo "<p>Ne poznam te. <a href='DemoSeje.php'>Tukaj se prijavi!</a></p>";
			}
		?>	
		<a href="index.php">Nazaj</a>
	</body>
</html>