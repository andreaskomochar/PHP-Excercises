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
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Izpis rezervacij jadralca</title>
	</head>
	<body>
	<form action="Rezervacije.php" method="post">
		<?php MeniJadralcev($dbCon);  ?>
		<input type="submit" value="Izpis rezervacij">
	</form>
	<a href="index.php">Nazaj</a>
	</body>
</html>

<?php 
mysqli_close($dbCon);
?>