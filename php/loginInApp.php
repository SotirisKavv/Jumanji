<?php
  if (isset($_POST['login-submit'])) {

    require 'config.php';

    $username = $_POST['uname'];
    $password = $_POST['pwd'];

    if (empty($username) || empty($password)) {
      header("Location: ../login.php?error=emptyfields");
      exit();
    } else {

      $sql = "select * from Users where username=?";
      $stmt = $conn->stmt_init();
      if (!mysqli_stmt_prepare($stmt, $sql)) {

        header("Location: ../login.php?error=sqlerror");
        exit();

      } else {

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {

          $verifiedPwd = password_verify($password, $row['password']);
          if ($verifiedPwd == false) {

            header("Location: ../login.php?error=wrongpwd");
            exit();

          } elseif ($verifiedPwd == true) {

            session_start();
            $_SESSION['uname'] = $row['username'];
            $_SESSION['level'] = $row['access_level'];

            header("Location: ../missions.php?succesfulLogin");
            exit();
          }
        } else {

          header("Location: ../login.php?error=nouser");
          exit();
        }
      }
    }

  } else {
    header("Location: ../index.php");
    exit();
  }
 ?>
