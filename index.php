<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vaje PHP</title>
	</head>
	<body>
		<a style="display:block;" href="tabela100.php">Izpis tabele do 100</a>
		<a style="display:block;" href="tabela100func.php">Izpis tabel velikosti 5 in 7</a>
		<a style="display:block;" href="streznikinfo.php">Informacije o strezniku</a>
		<a style="display:block;" href="piskotki.php">Izpis vseh piskotkov na strani</a>
		<hr/>
		<a style="display:block;" href="PovezavaDB.php">Povezava na podatkovno bazo</a>
		<a style="display:block;" href="PoizvedbaDB.php">Poizvedba in enostaven izpis rezultata</a>
		<a style="display:block;" href="PoizvedbaDB2.php">Poizvedba in enostaven izpis podatkov</a>
		<a style="display:block;" href="PoizvedbaDB3.php">Poizvedba in izpis podatkov v tabeli</a>
		<a style="display:block;" href="PoizvedbaDB4.php">Poizvedba in izpis podatkov v tabeli (uporaba funkcije)</a>
		<a style="display:block;" href="PoizvedbaDB5.php">Uporaba podatkov v spustnem meniju</a>
		<a style="display:block;" href="PoizvedbaDB6.php">Izpis rezervacij izbranega jadralca</a>
		<a style="display:block;" href="PoizvedbaDB6b.php">Izpis rezervacij na isti strani</a>
		<a style="display:block;" href="PoizvedbaDB6c.php?jid=22">Izpis podatkov jadralca s sifro 22</a>
		<a style="display:block;" href="PoizvedbaDB7.php">Vnos nove rezervacije</a>
		<a style="display:block;" href="PoizvedbaDB7a.php">Vnos nove rezervacije (jQUery-DatePicker)</a>
		<hr/>
		<a style="display:block;" href="DemoSeje.php">Demonstracija uporabe seje</a>
		<a style="display:block;" href="DemoCookie.php">Uporaba piskota (stevec obiskov strani)</a>
		<a style="display:block;" href="DemoCookie2.php">Pozdrav uporabnika</a>
		<hr/>
		<form action="izpisDatuma2.php">
			<input type="submit" value="Izpis datuma streznika" />
		</form>
	
		<hr/>
		<p>Uporaba metode POST</p>	
		<form action="loginObrazecPost2.php" method="post">
			Uporabnisko ime:<input type="text" name="ime"><br/>
			Geslo:<input type="password" name="geslo"><br/>
			<input type="submit" value="Login" />
		</form>
		<hr/>
		
		<p>Uporaba metode GET</p>	
		<form action="loginObrazecGet.php" method="get">
			Uporabnisko ime:<input type="text" name="ime"><br/>
			Geslo:<input type="password" name="geslo"><br/>
			<input type="submit" value="Login" />
		</form>
		<hr/>
		
		<p>Obdelava obrazca z vec izbirami (checkbox)</p>	
		<form action="checkBox.php" method="post">
			<input type="checkbox" name="sport[]" value="nogomet">Nogomet
			<input type="checkbox" name="sport[]" value="kosarka">Kosarka
			<input type="checkbox" name="sport[]" value="hokej">Hokej
			<input type="checkbox" name="sport[]" value="odbojka">Odbojka
			<input type="checkbox" name="sport[]" value="rokomet">Rokomet
			<input type="checkbox" name="sport[]" value="vaterpolo">Vaterpolo
			<br/>
			<input type="radio" name="spol" value="man">Moski
			<input type="radio" name="spol" value="woman">Zenska
			<br/>
			<select name="avto">
  				<option value="volvo">Volvo</option>
  				<option value="saab">Saab</option>
  				<option value="mercedes">Mercedes</option>
  				<option value="audi">Audi</option>
			</select>
			<input type="submit" value="Obdelaj" />
		</form>
	</body>
</html>