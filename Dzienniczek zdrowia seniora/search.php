<form method="GET">
  <input type="text" name="wyszukaj">
  <input type="submit" name="szukaj" value="Przeszukaj"/>
</form>

<?php

if(isset($_GET['wyszukaj'])){
  require_once('connect.php');
try{
  $db = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8',
   $db_user, $db_password, array(
     PDO::ATTR_EMULATE_PREPARES => false,
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
   ));


  $wyszukaj=$_GET['wyszukaj'];
  $min_wartosc = 1;

  if(strlen($wyszukaj)>=$min_wartosc)
  {
    $wyszukaj = htmlspecialchars($wyszukaj);

    $zapytanie=$db->prepare("SELECT * FROM przyklad  WHERE nazwisko LIKE :wyszukaj ");

      $zapytanie->bindValue('wyszukaj', $_GET['wyszukaj'],PDO::PARAM_STR);

      $zapytanie->execute(array('%'.$wyszukaj.'%'));

      if($zapytanie->rowCount()>0)
      {
        while($wynik=$zapytanie->fetch())
        {
          echo $wynik['imie']."<br>";
          echo $wynik['nazwisko']."<br>";
          echo $wynik['data']."<br>";
          echo $wynik['waga']."<br>";
          echo $wynik['cisnienie']."<br>";
          echo $wynik['cukier']."<br>";
          echo $wynik['sen']."<br>";
          echo "<br>";
        }
      }
      else
      {
        echo "Nie udało sie znaleźć!";
      }
  }
else
{
  echo "";
}

}catch(PDOException $err){
  echo "ERROR: ". $err->getMessage();

}
}

 ?>
 <form action="indexG.php" method="post">
   <input type="submit" value="Powrót do menu"/>
   <?/form>
