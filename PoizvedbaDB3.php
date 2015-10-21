<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Izpis jadralcev</title>
	</head>
	<body>
	<?php
		echo "Povezava na MySQL bazo<br/>";
		$dbc = mysqli_connect('178.172.41.68','user','Ge5lo','spdn5') or die("Error " . mysqli_error($link));
		
		if($dbc) {
			echo "Povezava je uspela";
		} else {
			echo "Povezava ni bila uspesna";
		}
		echo "<br/>";
		
		$sql = "SELECT * FROM Jadralec;";
		$result = mysqli_query($dbc, $sql);
		
		echo "<table border='0' cellspacing='2' cellpadding='2' style='border:solid 1px'>";
		echo "<tr><th>Sifra</th><th>Ime</th><th>Rating</th><th>Starost</th></tr>";
		while ($vrstica = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>{$vrstica['jid']}</td><td>{$vrstica['ime']}</td><td>{$vrstica['rating']}</td><td>{$vrstica['starost']}</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		echo "<br/>";
		
		mysqli_close($dbc);
	?>
	<a href="index.php">Nazaj</a>
	</body>
</html>