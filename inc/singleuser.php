<?php
include("scripts/db_connect.php");

$userID = $params['userID'];

$sql = "SELECT * FROM users WHERE userID='" . $userID . "'";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

  header('Content-type: application/json');
  echo json_encode($rows);

?>
