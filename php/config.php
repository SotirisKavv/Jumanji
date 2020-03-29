<?php
  $servername = "db43.grserver.gr:3306";
  $username = "menoumeusr";
  $password = "Djp1a77!";
  $db_name = "menoumespiti";

  $conn = new mysqli($servername, $username, $password, $db_name);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
