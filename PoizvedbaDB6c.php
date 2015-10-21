<?php 
$dbCon = mysqli_connect('178.172.41.68','user','Ge5lo','spdn5') or die("Error " . mysqli_error($link));

function IzpisPodatkovJadralca($dbc, $jid){
	$sql = "SELECT * FROM jadralec j WHERE jid=$jid;";
	$result = mysqli_query($dbc, $sql);

	// Kot rezultat poizvedbe pricakujem eno samo vrstico! 
	$vrstica = mysqli_fetch_array($result);
	
	echo "<h3>Podatki o jadralcu {$vrstica['ime']}:</h3>";
	echo "<ul>";
	echo "<li>Sifra: {$vrstica['jid']}</li>";
	echo "<li>Starost: {$vrstica['starost']}</li>";
	echo "<li>Rating: {$vrstica['rating']}</li>";
	echo "</ul>";
	echo "<br/>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Izpis podatkov jadralca</title>
	</head>
	<body>
	<?php
		if (isset($_GET['jid'])){
			IzpisPodatkovJadralca($dbCon, $_GET['jid']);
		} 
	?>
	<a href="index.php">Nazaj</a>
	</body>
</html>

<?php 
mysqli_close($dbCon);
?>