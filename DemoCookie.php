<?php
	// Ce piskotek ze obstaja, ga povecam, sicer pa ga nastavim na zacetno vrednost 
	if (isset($_COOKIE['stevec'])){
		$count = $_COOKIE['stevec'] + 1;
		setcookie('stevec', $count);
	} else {
		$count = 1;
		setcookie('stevec', $count);
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Demo Cookie 1</title>
	</head>
	<body>
		<?php
			echo "<p>Ta stran belezi $count obiskov.</p>";
		?>	
		<a href="index.php">Nazaj</a>
	</body>
</html>