<?php 
	session_start();
	
	if (isset($_POST['ime'])){
		$_SESSION['ime'] = $_POST['ime'];
	}
	
	if (isset($_POST['ime'])){
		setcookie('uporabnik', $_POST['ime']);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shranjevanje podatkov seje</title>
	</head>
	<body>
		<?php
			echo "<h3>Pozdravljen {$_SESSION['ime']}</h3>";
		?>	
		<a href="DemoSeje.php">Nazaj</a>
	</body>
</html>