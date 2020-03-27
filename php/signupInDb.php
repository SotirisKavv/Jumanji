<?php
  if (isset($_POST['signup-submit'])) {

    require 'config.php';

    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordRpt = $_POST['pwd-rpt'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRpt)) {
      header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
      exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../signup.php?error=invalidmail&uname=".$username);
      exit();
    } elseif ($password !== $passwordRpt) {
      header("Location: ../signup.php?error=invalid_password&uname=".$username."&mail=".$email);
      exit();
    } else{
      $sql ="select id from Users where username=?";
      $stmt = $conn->stmt_init();
      if (!$stmt->prepare($sql)) {
        header("Location: ../signup?error=sqlerror");
        exit();
      } else {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows()>0) {
          header("Location: ../signup.php?error=usernameTaken&mail=".$email);
          exit();
        } else {
          $sql = "insert into Users (username, password, email, access_level) values (?, ?, ?, 1)";
          $stmt = $conn->stmt_init();
          if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
          } else {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bind_param("sss", $username, $hashedPwd, $email);
            $stmt->execute();
            header("Location: ../missions.php?success");
            exit();
          }
        }
      }
    }
  } else {
    header("Location: ../signup.php");
    exit();
  }

 ?>