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
    <link rel="stylesheet" href="./css/signup.css"/>
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
          case 'invalidmail':
            echo "<div class=\"error\">
                    <p>Παρακαλώ, συμπληρώστε σωστά το mail σας!</p>
                  </div>";
            break;
          case '6charsorpassword':
            echo "<div class=\"error\">
                    <p>Ο κωδικός σας πρέπει να είναι τουλάχιστον 6 χαρακτήρων,
                      και να περιέχει σύμβολα όπως a-z, A-Z, 0-9 ή $,:,?,.,~,^,_
                       .</p>
                  </div>";
            break;
          case 'invalid_password':
            echo "<div class=\"error\">
                    <p>Ο κωδικός που βάλατε δεν αντιστοιχεί με αυτόν στο
                    τελευταίο!</p>
                  </div>";
            break;
          case 'usernameTaken':
            echo "<div class=\"error\">
                    <p>Το username που επιλέξατε έχει επιλεχθεί από κάποιον
                    άλλον χρήστη. Παρακαλώ επιλέξτε κάποιο άλλο!</p>
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
    <form class="box" action="./php/signupInDb.php" method="post">
      <h1>Εγγραφή</h1>
      <input type="text" name="uname" placeholder="Username">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="pwd" placeholder="Κωδικός">
      <input type="password" name="pwd-rpt" placeholder="Επαναλάβετε τον κωδικό σας">
      <input type="submit" name="signup-submit" value="Εγγραφή">
      <p>
        Έχεις ήδη λογαριασμό; Μπες <a href="./login.php">εδώ</a> και δες τις αποστολές σου!
      </p>
    </form>
    <footer>
      &copy; 2020 skavvouras Dev. All Rights Reserved.
    </footer>
  </body>
</html>
