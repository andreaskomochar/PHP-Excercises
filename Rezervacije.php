<?php 
$dbCon = mysqli_connect('178.172.41.68','user','Ge5lo','spdn5') or die("Error " . mysqli_error($link));

function IzpisRezervacij($dbc, $jid){
	$sql = "SELECT c.ime, r.dan FROM Rezervacija r, Coln c WHERE r.cid = c.cid and jid=$jid;";
	$result = mysqli_query($dbc, $sql);
	
	echo "<table border='0' cellspacing='2' cellpadding='2' style='border:solid 1px'>";
	echo "<tr><th>Ime colna</th><th>Datum</th>";
	while ($vrstica = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>{$vrstica['ime']}</td><td>{$vrstica['dan']}";
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
		<title>Izpis rezervacij</title>
	</head>
	<body>
	<?php
		echo "Jadralec s sifro {$_POST['jid']} je rezerviral naslednje colne:";
		IzpisRezervacij($dbCon, $_POST['jid']);
	?>
	<a href="index.php">Nazaj</a>
	</body>
</html>

<?php 
mysqli_close($dbCon);
?>