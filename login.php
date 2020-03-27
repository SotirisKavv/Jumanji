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
    <form class="box" action="signupInDb.php" method="post">
      <h1>Σύνδεση</h1>
      <div class="area">
        <i class="fa fa-user"></i>
        <input type="text" name="" placeholder="Username">
      </div>
      <div class="area">
        <i class="fa fa-lock"></i>
        <input type="password" name="" placeholder="Κωδικός">
      </div>
      <input type="submit" name="" value="Συνδέσου">
      <p>
        Δεν έχεις λογαριασμό; Μπες <a href="./signup.php">εδώ</a> και κάνε την εγγραφή σου τώρα!
      </p>
    </form>
    <footer>
      &copy; 2020 skavvouras Dev. All Rights Reserved.
    </footer>
  </body>
</html>
