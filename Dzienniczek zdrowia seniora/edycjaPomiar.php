<html>
<body>
  <div style="text-align: center">
<?php
$user = 'root';
$pass = '';

$db = 'dzienniczekseniora';
$db = new mysqli('localhost', $user, $pass, $db) or die("Nie można połączyć z bazą!");

$sql="UPDATE parametry SET  waga='$_POST[waga]', cisnienie='$_POST[cisnienie]', cukier='$_POST[cukier]', sen='$_POST[sen]', temperatura='$_POST[temperatura]' WHERE  data='$_POST[data]' AND id='$_POST[id]'";

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
