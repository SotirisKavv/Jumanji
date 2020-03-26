<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/jumanjiLogo.png" />
    <link rel="stylesheet" href="./index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to Jumanji Countdown</title>
  </head>
  <body>
    <header>
      <div class="account">
        <div class="signup">
          <a href="./signup.php">Sign Up</a>
        </div>
        <div class="login">
          <a href="./login.php">Login</a>
        </div>
      </div>
      <div id="container">
        <div class="svg">
            <?php require 'svg.php'; ?>
          </div>
        <h2>Σύντομα κοντά σας</h2>
        <div class="countdown">
          <div class="countd">
            <span id="days">00</span>
            DAYS
          </div>
          <div class="countd">
            <span id="hours">00</span>
            HOURS
          </div>
          <div class="countd">
            <span id="mins">00</span>
            MINUTES
          </div>
          <div class="countd">
            <span id="secs">00</span>
            SECONDS
          </div>
        </div>
    </header>
    <main>
      <div class="content">
        <?php
          $servername = "db";
          $username = "sotiris";
          $password = "skavvouras";

          $conn = new mysqli($servername, $username, $password);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        ?>
        <h1>Η παρτίδα του επιτραπέζιου JUMANJI, έχει ξεκινήσει!</h1>

        <p>
          Tο 2ο Σύστημα Ναυτοπροσκόπων Χανίων είναι ένα από τα τυχερά προσκοπικά
          συστήματα που έχουν παραλάβει το επιτραπέζιο. Εδώ και 13 μέρες έχουμε
          εγκλωβιστεί μέσα στην παρτίδα και πρέπει να την τελειώσουμε για να
          βγούμε επιτέλους έξω!
          Για να γίνει όμως αυτό πρέπει ΟΛΟΙ οι παίκτες του συστήματος να
          βοηθήσουν...!!!!
        </p>
        <p>
          Πώς θα γίνει αυτό;
          Σε κάθε πίστα θα έρχεσαι σε επαφή με έναν εγκλωβισμένο βαθμοφόρο, που θα
          πρέπει να τον ελευθερώσεις κάνοντας τη δοκιμασία που εκείνος δεν
          κατάφερε να κάνει! Όσοι ολοκληρώσουν τις πίστες και βοηθήσουν ΟΛΟΥΣ τους
          βαθμοφόρους να ελευθερωθούν, θα λάβουν στο σπίτι το απόλυτο και
          απαραίτητο αξεσουάρ διαβίωσης στη φύση!
        </p>
        <p>
          Θα λαμβάνετε τα μηνύματα με τις αποστολές κάθε Τρίτη και κάθε Σάββατο,
          όταν δηλαδή ανοίγουν οι διαδικτυακές πίστες! Ο κάθε ένας από εσάς,
          αναλόγως σε ποιό τμήμα βρίσκεται, θα στέλνει στον ανάλογο βαθμοφόρο μέιλ
          με την εκπλήρωση της πίστας, ώστε να ξεκλειδώνεται η επόμενη!
         </p>
      </div>
    </main>
    <footer>
      &copy; 2020 Webster Devs. All Rights Reserved.
    </footer>

    <script type="text/javascript">
      const date = new Date("30 mar 2020 19:00:00").getTime();
      const x = setInterval(() =>{
        const now = new Date().getTime();
        const d = date - now;

        var days= Math.floor(d/(1000*60*60*24)).toString();
        var hours= Math.floor((d%(1000*60*60*24))/(1000*60*60)).toString();
        var minutes= Math.floor((d%(1000*60*60))/(1000*60)).toString();
        var seconds= Math.floor((d%(1000*60))/1000).toString();

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("mins").innerHTML = minutes;
        document.getElementById("secs").innerHTML = seconds;
        console.log(d)

        if (d<=0){
          clearInterval(x)

          document.getElementById("days").innerHTML = '00';
          document.getElementById("hours").innerHTML = '00';
          document.getElementById("mins").innerHTML = '00';
          document.getElementById("secs").innerHTML = '00';
        }

      }, 1000)
    </script>
  </body>
</html>
