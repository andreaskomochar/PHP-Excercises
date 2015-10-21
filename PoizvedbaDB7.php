<?php 
$dbCon = mysqli_connect('178.172.41.68','user','Ge5lo','spdn5') or die("Error " . mysqli_error($link));

function MeniJadralcev($dbc){
	$sql = "SELECT * FROM Jadralec;";
	$result = mysqli_query($dbc, $sql);
	
	echo "<select name='jid'>";
	while ($vrstica = mysqli_fetch_array($result)) {
		echo "<option value='{$vrstica['jid']}'>{$vrstica['ime']}</option>";
	}
	
	echo "</select>";
	echo "<br/>";
}

function MeniColnov($dbc){
	$sql = "SELECT * FROM Coln;";
	$result = mysqli_query($dbc, $sql);

	echo "<select name='cid'>";
	while ($vrstica = mysqli_fetch_array($result)) {
		echo "<option value='{$vrstica['cid']}'>{$vrstica['ime']}</option>";
	}

	echo "</select>";
	echo "<br/>";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vnos rezervacije</title>
	</head>
	<body>
	<form action="Rezerviraj.php" method="post">
		<?php 
			MeniJadralcev($dbCon);
			MeniColnov($dbCon);
		?>
		<input type="date" name="dan">
		<input type="submit" value="Rezerviraj">
	</form>
	<a href="index.php">Nazaj</a>
	</body>
</html>

<?php 
mysqli_close($dbCon);
?>