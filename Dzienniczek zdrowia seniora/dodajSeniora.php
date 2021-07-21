<html>
<body>
<?php
$user = 'root';
$pass = '';

$db = 'dzienniczekseniora';
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

$sql="INSERT INTO parametry (id, data, waga, cisnienie, cukier, sen, temperatura)
VALUES
('$_POST[id]','$_POST[data]','$_POST[waga]','$_POST[cisnienie]','$_POST[cukier]','$_POST[sen]','$_POST[temperatura]')";

if (!mysqli_query($db, $sql))
  {
  die('Blad: ' . mysqli_error($db));
  }
echo "Poprawnie dodano wpis!";
$db->close();
?>
<form action="indexG.php" method="post">
  <input type="submit" value="Powrót do menu"/>
  <?/form>
</body>
</html>
