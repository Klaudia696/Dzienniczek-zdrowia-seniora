<html>
<body>
  <div style="text-align: center">
<?php
$user = 'root';
$pass = '';

$db = 'dzienniczekseniora';
$db = new mysqli('localhost', $user, $pass, $db) or die("Nie można połączyć z bazą!");

$sql="INSERT INTO dane (id, imie, nazwisko,plec, pesel, wiek, kontakt, przyjazd, dodatkowe)
VALUES
('$_POST[id]','$_POST[imie]','$_POST[nazwisko]','$_POST[plec]','$_POST[pesel]','$_POST[wiek]','$_POST[kontakt]','$_POST[przyjazd]','$_POST[dodatkowe]')";

if (!mysqli_query($db, $sql))
  {
  die('Blad: ' . mysqli_error($db));
  }
echo "Dodano nowego pacjenta do bazy!";
$db->close();
?>
<form action="indexG.php" method="post">
  <input type="submit" value="Powrót do menu"/>
  <?/form>
  </div>
</body>
</html>
