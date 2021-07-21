<html>
<body>
  <div style="text-align: center">
<?php
$user = 'root';
$pass = '';

$db = 'dzienniczekseniora';
$db = new mysqli('localhost', $user, $pass, $db) or die("Nie można połączyć z bazą!");

$sql="UPDATE dane SET imie='$_POST[imie]', nazwisko='$_POST[nazwisko]',plec='$_POST[plec]', pesel='$_POST[pesel]', wiek='$_POST[wiek]', kontakt='$_POST[kontakt]', przyjazd='$_POST[przyjazd]', dodatkowe='$_POST[dodatkowe]' WHERE id='$_POST[id]'";

if (!mysqli_query($db, $sql))
  {
  die('Blad: ' . mysqli_error($db));
  }
echo "Dane zostały zmienione poprawnie!";
$db->close();
?>
<form action="indexG.php" method="post">
  <input type="submit" value="Powrót do menu"/>
  <?/form>
  </div>
</body>
</html>
