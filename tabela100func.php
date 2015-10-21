<?php
	function tabela($velikost){
		echo "<table style='border:1px solid;background-color:orange;'>";
		for ($i=0;$i<$velikost;$i++){
			echo "<tr>";
			for ($j=0;$j<$velikost;$j++){
				$stevilo = $j+$i*$velikost+1;
					
				if ($stevilo % 2){
					$stil = "style='color:blue'";
				} else {
					$stil = "style='color:white'";
				}
				echo "<td $stil>$stevilo</td>";
			}
			echo "</tr>";
			}
		echo "</table>";
	} 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Poljubna tabela</title>
		</script>
	</head>
	<body>
		<?php 
			tabela(5);
			echo "<br/>";
			tabela(7);
		?>	
	<a href="index.php">Nazaj</a>
	</body>
</html>