<?php 
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aktivna seja</title>
	</head>
	<body>
		<?php
			echo "<p>Seja je koncana.</p>";
		?>
		<a href="DemoSeje.php">Nazaj</a>
	</body>
</html>