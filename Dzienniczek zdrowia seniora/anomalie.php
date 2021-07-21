<head>
<link rel="stylesheet" href="style/formularz.css" type="text/css" />
<div style="text-align: center">

<b> "Nieprawidłowe parametry pacjentów!"</b>
<p> </p>

<?php

echo "<table style='border: solid 1px black;text-align: center;'>";

echo "<tr style='text-align: center;''><th>IMIĘ</th><th>NAZWISKO</th><th>DATA</th><th>CIŚNIENIE(mmHg)</th><th>POZIOM CUKRU(mg/dL)</th><th>TEMPERATURA CIAŁA('C)</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dzienniczekseniora";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT imie, nazwisko, data, cisnienie, cukier, temperatura FROM dane INNER JOIN parametry ON dane.id = parametry.id WHERE cisnienie>150 OR cukier>99 OR cisnienie<120 OR cukier<70 OR temperatura<35 OR temperatura>37 ");
  $stmt->execute();
  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;

  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
<div style="text-align: center">
<ol style="display: inline-block;">

  <b>"UWAGA!"</b>
<li>"Prawidłowe ciśnienie u osób starszych jest w granicach 140 - 150 mm Hg. "</li>
<li>"Prawidłowe poziom cukru u osób starszych jest w granicach 70 - 99 mg/dl. "</li>
<li>"Prawidłowa tempertura ciała u osób starszych jest poniżej 37'C, a powyżej może sugerować stan podgorączkowy. "</li>
  <b>"Należy pamiętać, że różne schorzenia pacjentów mogą powodować odbiegające od norm parametry!"</b>
</ol>
<div id="layout">
<form action="indexG.php" method="post">
  <input type="submit" value="Powrót do menu"/>
  <?/form>
