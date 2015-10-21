<?php 
	session_start(); 
	
	// Shranimo spremenljivko za uporabo na drugi strani
	$_SESSION['demoNum'] = 77;
	$_SESSION['demoStr'] = 'Jaz sem niz z druge spletne strani.';
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Seje</title>
	</head>
	<body>
		<?php
			echo "<h3>Nastavimo naslednji spremenljivki:</h3>";
			echo "<p>demoNum = 77, demoStr = 'Jaz sem niz z druge spletne strani.'</p>";
			if (isset($_SESSION['ime'])){
				echo "<h3>Prijavljen si kot {$_SESSION['ime']}</h3>";
			}
		?>
		<a style="display: block" href="NeaktivnaSeja.php">Stran brez aktivirane seje</a>
		<a style="display: block"  href="AktivnaSeja.php">Stran z aktivirano sejo</a>
		<a style="display: block"  href="PrekinitevSeje.php">Prekini sejo</a>
		<p>Prijavni obrazec</p>	
		<?php
			if (isset($_SESSION['ime'])) {
				echo "<h4>Prijavljen si kot {$_SESSION['ime']}! </h4>";  
			} else {
		?>
			<form action="loginObrazecPost3.php" method="post">
				Uporabnisko ime:<input type="text" name="ime"><br/>
				Geslo:<input type="password" name="geslo"><br/>
				<input type="submit" value="Login" />
			</form>
			<?php
			} 
			?>
			
		<a href="index.php">Nazaj</a>
	</body>
</html>