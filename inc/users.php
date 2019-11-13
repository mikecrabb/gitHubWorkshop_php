<?php
include("scripts/db_connect.php");

$sql = "SELECT * FROM users";
$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

  header('Content-type: application/json');
  echo json_encode($rows);
?>
