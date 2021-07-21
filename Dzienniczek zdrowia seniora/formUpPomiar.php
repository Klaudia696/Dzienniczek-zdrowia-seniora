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
	<p>Edytuj wybrany pomiar.</p>

	<form action="edycjaPomiar.php" method="post">
    DATA:
		<input type="date" name="data" data-date="" data-date-format="DD MMMM YYYY" value="2020-03-03">

			<br/></br>
		ID:
			<input type="int" name="id"/>

				<br/></br>


		MASA CIAŁA(kg):
		<input type="text" name="waga"/>

			<br/></br>

		TEMPERATURA CIAŁA('C):
		<input type="text" name="temperatura"/>

			<br/></br>

		POZIOM CUKRU(mg/dL):
		<input type="text" name="cukier"/>

			<br/></br>

		CIŚNIENIE(mmHg):
		<input type="text" name="cisnienie"/>

			<br/></br>

		ILOŚĆ GODZIN SNU(h):
		<input type="text" name="sen"/>

			<br/></br>

		<input type="submit" value="Edytuj"/>
		</div>
    <div id="layout"></div>
	<?/form>
</body>
</html>
