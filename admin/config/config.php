<?php
$mysqli = new mysqli("localhost","root","","web_mysqli");

// Check connection
if ($mysqli->connect_errno) {
  echo "KẾT NỐI MYSQLI LỖI" . $mysqli->connect_error;
  exit();
}
?>