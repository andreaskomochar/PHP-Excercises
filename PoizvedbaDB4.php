<?php 
$dbCon = mysqli_connect('178.172.41.68','user','Ge5lo','spdn5') or die("Error " . mysqli_error($link));

function IzpisJadralcev($dbc){
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
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Poizvedba DB3</title>
	</head>
	<body>
	<?php
		IzpisJadralcev($dbCon);
	?>
	<a href="index.php">Nazaj</a>
	</body>
</html>

<?php 
mysqli_close($dbCon);
?>