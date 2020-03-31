<?php
  $servername = "db";//db43.grserver.gr:3306
  $username = "sotiris";//menoumeusr
  $password = "skavvouras";//Djp1a77!
  $db_name = "jumanji_db";//menoumespiti

  $conn = new mysqli($servername, $username, $password, $db_name);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
