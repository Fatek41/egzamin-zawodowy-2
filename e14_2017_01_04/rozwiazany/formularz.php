<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Sklep muzyczny</title>
	<link rel="stylesheet" href="muzyka.css" />
</head>
<body>
	<div id="baner">
		<h1>SKLEP MUZYCZNY</h1>
	</div>
	<div id="lewy">
		<h2>NASZA OFERTA</h2>
		<ol>
			<li>Instrumenty muzyczne</li>
			<li>Sprzęt audio</li>
			<li>Płyty CD</li>
		</ol>
	</div>
	<div id="prawy">
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'Sklep');
		if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['adres']) && !empty($_POST['telefon']) && !empty($_POST['login']) && !empty($_POST['haslo'])) {
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$adres = $_POST['adres'];
			$telefon = $_POST['telefon'];
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			$kw1 = "INSERT INTO uzytkownicy VALUES (NULL, '$imie','$nazwisko','$adres','$telefon')";
			$kw2 = "INSERT INTO konta VALUES (NULL, '$login','$haslo')";
			mysqli_query($con, $kw1);
			mysqli_query($con, $kw2);
			echo "Konto $imie $nazwisko zostało zarejestrowane w sklepie muzycznym";
		} else echo "Nie wprowadzono danych";
		mysqli_close($con);
		?>
	</div>
</body>
</html>