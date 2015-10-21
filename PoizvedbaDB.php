<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Poizvedba DB</title>
	</head>
	<body>
	<?php
		echo "Povezava na MySQL bazo 2<br/>";
		$dbc = mysqli_connect('178.172.41.68','user','Ge5lo','spdn5') or die("Error " . mysqli_error($link));
		
		print_r($dbc);
		
		if($dbc) {
			echo "Povezava je uspela";
		} else {
			echo "Povezava ni bila uspesna";
		}
		echo "<br/>";
		
		$sql = "SELECT * FROM Jadralec;";
		$result = mysqli_query($dbc, $sql);
		
		print_r($result);
		
		echo "<br/>";
		
		mysqli_close($dbc);
	?>
	<a href="index.php">Nazaj</a>
	</body>
</html>