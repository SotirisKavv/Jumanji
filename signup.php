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
