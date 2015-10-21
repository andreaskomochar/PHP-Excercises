<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aktivna seja</title>
	</head>
	<body>
		<?php
			if (isset($_SESSION['demoNum']) && isset($_SESSION['demoStr'])){
				echo "<p>demoNum = {$_SESSION['demoNum']}, demoStr = {$_SESSION['demoStr']}</p>";
			} else {
				echo "<p>Spremenljivke ne obstajajo.</p>";
			} 
		?>
		<a href="DemoSeje.php">Nazaj</a>
	</body>
</html>