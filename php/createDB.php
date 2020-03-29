<?php
  require_once 'config.php';

  $sql = "create table if not exists Users (
          id int not null auto_increment,
          username varchar(255),
          email varchar(255),
          password varchar(255),
          access_level int,
          name varchar(255),
          primary key (id)
        );";

  if ($conn->query($sql) !== TRUE) {
    echo "Error creating database: " . $conn->error;
  }

  $data = $conn->query("select count(*) from Users");
  $row = $data->fetch_row();

  if ($row[0] < 1) {

    $password = password_hash('sotiris19', PASSWORD_DEFAULT);

    $sql = "insert into Users (username, email, password, access_level) values
              ('skavvouras', 'sotos.kavvouras@gmail.com','".$password."', 10);";

    if ($conn->query($sql) !== TRUE) {
      echo "Error inserting User: " . $conn->error;
    }
  }
?>
