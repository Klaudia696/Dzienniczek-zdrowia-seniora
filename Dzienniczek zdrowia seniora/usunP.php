
<?php
$mysqli = new mysqli("localhost", "root", "", "dzienniczekseniora");

if(isset($_POST['id'])) {
  $sql = sprintf("DELETE FROM dane WHERE id = %d", $_POST['id']);
  $mysqli->query($sql);
  header('Location: ' . getenv("HTTP_REFERER"));
  die();
}

$result = $mysqli->query("SELECT * FROM dane ORDER BY id ASC LIMIT 1000");
echo '<table><tr>
  <th>ID</th>
  <th>Imię</th>
  <th>Nazwisko</th>
  <th> </th>
</tr>';
while( $row = $result->fetch_row()) {
  vprintf('<tr><td>%s</td><td>%s</td><td>%s</td>
        <td><form action="" method="post">
        <input type="hidden" name="id" value="%s">
        <input type="submit" name="s" value="Usuń">
        </form></td>
        </tr>', $row);
}
echo '</table>';
?>
