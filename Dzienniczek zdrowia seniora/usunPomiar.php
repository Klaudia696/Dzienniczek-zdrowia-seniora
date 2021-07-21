<?php
$mysqli = new mysqli("localhost", "root", "", "dzienniczekseniora");

if(isset($_POST['nid'])) {
  $sql = sprintf("DELETE FROM parametry WHERE id = %d", $_POST['nid']);
  $mysqli->query($sql);
  header('Location: ' . getenv("HTTP_REFERER"));
  die();
}

$result = $mysqli->query("SELECT * FROM parametry ORDER BY id ASC LIMIT 1000");
echo '<table><tr>
  <th>ID</th>
  <th>Data</th>
  <th>Waga</th>
  <th>Ciśnienie</th>
  <th>Cukier</th>
  <th>Sen</th>
  <th> </th>
</tr>';
while( $row = $result->fetch_row()) {
  vprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td>
        <td><form action="" method="post">
        <input type="hidden" name="nid" value="%s">
        <input type="submit" name="s" value="Usuń">
        </form></td>
        </tr>', $row);
}
echo '</table>';
?>
