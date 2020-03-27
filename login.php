<?php
  session_start();

  if (isset($_SESSION['uname'])) {
    header("Location: ./index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/jumanjiLogo.png" />
    <link rel="stylesheet" href="./css/login.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/b9ef111606.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Εγγραφθείτε τώρα σύντομα και απλά!</title>
  </head>
  <body>
    <?php
      if (isset($_GET['error'])) {
        switch ($_GET['error']) {
          case 'emptyfields':
            echo "<div class=\"error\">
                    <p>Παρακαλώ, συμπληρώστε όλα τα πεδία!</p>
                  </div>";
            break;
          case 'nouser':
            echo "<div class=\"error\">
                    <p>Δε βρέθηκε χρήστης με αυτά τα στοιχεία. Παρακαλώ
                    βεβαιωθείτε ότι έχετε βάλει σωστά τα στοιχεία σας!</p>
                  </div>";
            break;
          case 'wrongpwd':
            echo "<div class=\"error\">
                    <p>Ο κωδικός σας είναι λανθασμένος. Παρακαλώ, προσπαθήστε
                    πάλι!</p>
                  </div>";
            break;
          case 'sqlerror':
            echo "<div class=\"error\">
                    <h1>505 Internal Error</h1>
                    <p>Παρακαλώ, επικοινωνήστε μαζί με την Ομάδα Τεχνικής
                    Υποστήριξης!</p>
                  </div>";
            break;
          default:
            // code...
            break;
        }
      }
     ?>
    <form class="box" action="./php/loginInApp.php" method="post">
      <h1>Σύνδεση</h1>
      <div class="area">
        <i class="fa fa-user"></i>
        <input type="text" name="uname" placeholder="Username">
      </div>
      <div class="area">
        <i class="fa fa-lock"></i>
        <input type="password" name="pwd" placeholder="Κωδικός">
      </div>
      <input type="submit" name="login-submit" value="Συνδέσου">
      <p>
        Δεν έχεις λογαριασμό; Μπες <a href="./signup.php">εδώ</a> και κάνε την εγγραφή σου τώρα!
      </p>
    </form>
    <footer>
      &copy; 2020 skavvouras Dev. All Rights Reserved.
    </footer>
  </body>
</html>
