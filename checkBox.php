<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Zahtevek s poljem vrednosti</title>
	</head>
	<body>
		<?php
			if (isset($_POST['sport'])) {
				foreach ($_POST['sport'] as $vrednost){
					echo "<p>Izbrani sporti: $vrednost</p>";
				}
			} else { 
				echo "<h5>Noben sport ni bil izbran!</h5>"; 
			}
			
			if (isset($_POST['spol'])) {
				echo "<p>Spol: {$_POST['spol']}</p>";
			} else echo "<h5>Spol ni bil izbran</h5>";

			if (isset($_POST['avto'])) {
				echo "<p>Izbrani avtomobil: {$_POST['avto']}</p>";
			}
						
		?>	
		<a href="index.php">Nazaj</a>
	</body>
</html>