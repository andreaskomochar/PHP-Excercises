<?php 
$dbCon = mysqli_connect('178.172.41.68','user','Ge5lo','spdn5') or die("Error " . mysqli_error($link));

function MeniJadralcev($dbc, $jid){
	$sql = "SELECT * FROM Jadralec;";
	$result = mysqli_query($dbc, $sql);
	
	echo "<select name='jid'>";
	while ($vrstica = mysqli_fetch_array($result)) {
		if ($jid == $vrstica['jid']) {
			$strSelected = " selected ";
		} else {
			$strSelected = "";
		}
		echo "<option value='{$vrstica['jid']}' $strSelected>{$vrstica['ime']}</option>";
	}
	
	echo "</select>";
	echo "<br/>";
}

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
		<title>Izpis rezervacij jadralca</title>
	</head>
	<body>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<?php if (isset($_POST['jid'])) {
			MeniJadralcev($dbCon, $_POST['jid']);
		} else {
			MeniJadralcev($dbCon, 0); 
		}?>
		<input type="submit" value="Izpis rezerv-acij">
	</form>
	
	<?php
		if (isset($_POST['jid'])){
			IzpisRezervacij($dbCon, $_POST['jid']);
		} 
	?>
	<a href="index.php">Nazaj</a>
	</body>
</html>

<?php 
mysqli_close($dbCon);
?>