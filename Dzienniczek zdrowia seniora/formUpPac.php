<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	<title>Dzienniczek zdrowia seniora</title>
	<link rel="stylesheet" href="style/formularz.css" type="text/css" />

</head>
<body>
	<div id="layout">
	<h1>Dzienniczek zdrowia seniora</h1>
	<p>Edytuj dane pacjenta.</p>

	<form action="edycjaPacjent.php" method="post">
		ID:
			<input type="int" name="id"/>

				<br/></br>

		IMIE:
			<input type="text" name="imie"/>

				<br/></br>

		NAZWISKO:
					<input type="text" name="nazwisko"/>

						<br/></br>
		Płeć:

					<input type="radio" name="plec" value="Kobieta">Kobieta
					<input type="radio" name="plec" value="Mężczyzna">Mężczyzna

						<br/></br>

		PESEL:
		<input type="int" name="pesel" />

			<br/></br>

		DATA URODZENIA:
		<input type="date" name="wiek" data-date="" data-date-format="DD MMMM YYYY" value="2020-03-03"/>

			<br/></br>

		KONTAKT:
		<input type="int" name="kontakt" />

			<br/></br>

		DATA PRZYJAZDU:
		<input type="date" name="przyjazd" data-date="" data-date-format="DD MMMM YYYY" value="2020-03-03"/>

			<br/></br>

		DODATKOWE INFO:
		<input type="text" name="dodatkowe" />

			<br/></br>

		<input type="submit" value="Edytuj"/>
		</div>
	<?/form>
</body>
</html>
