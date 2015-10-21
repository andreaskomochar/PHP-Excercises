<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>DTabela 100</title>
		</script>
	</head>
	<body>
		<?php
			echo "<table style='border:1px solid;background-color:yellow;'>";
			for ($i=0;$i<10;$i++){
				echo "<tr>";
				for ($j=0;$j<10;$j++){
					$stevilo = $j+$i*10+1;
					
					if ($stevilo % 2){
						$stil = "style='color:#0099FF'";
					} else {
						$stil = "style='color:#FF0000'";
					}
					echo "<td $stil>$stevilo</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			?>	
		<a href="index.php">Nazaj</a>
	</body>
</html>