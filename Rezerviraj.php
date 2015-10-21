<?php 
$dbCon = mysqli_connect('178.172.41.68','user','Ge5lo','spdn5') or die("Error " . mysqli_error($link));

function VnosRezervacije($dbc, $jid, $cid, $dan){
	$sql = "INSERT INTO Rezervacija (jid, cid, dan) VALUES ($jid, $cid, '$dan');";
	echo "<p>$sql</p>";
	$result = mysqli_query($dbc, $sql);
	
	if ($result){
		echo "<p>Vpisano!</p>";
	} else {
		echo "<p>Napaka pri vpisu v bazo.</p>";
	}
	echo "<br/>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vnos rezervacij</title>
	</head>
	<body>
	<?php
		$jid = $_POST['jid'];
		$cid = $_POST['cid'];
		$dan = $_POST['dan'];
		echo "Rezervacija: JID = $jid, CID = $cid, Datum = $dan";
		VnosRezervacije($dbCon, $jid, $cid, $dan);
	?>
	<a href="index.php">Nazaj</a>
	</body>
</html>

<?php 
mysqli_close($dbCon);
?>