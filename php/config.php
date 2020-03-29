<?php
  $servername = "db";
  $username = "sotiris";
  $password = "skavvouras";
  $db_name = "jumanji_db";

  $conn = new mysqli($servername, $username, $password, $db_name);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
