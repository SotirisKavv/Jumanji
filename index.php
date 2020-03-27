<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/jumanjiLogo.png" />
    <link rel="stylesheet" href="./css/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/b9ef111606.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Καλώς ήρθατε στο Jumanji</title>
  </head>
  <body>
    <button id="scroll-btn" class="shadow">
      <i class="fa fa-angle-double-up"></i>
    </button>
    <div id="social">
      <a target="_blank" href="https://www.facebook.com/groups/14941723679/" class="facebook shadow">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a target="_blank" href="https://www.instagram.com/2onpchanion/" class="instagram shadow">
        <i class="fa fa-instagram"></i>
      </a>
      <a target="_blank" href="https://www.youtube.com/channel/UCpuICeexB9E9JIb7-OEbfLQ" class="youtube shadow">
        <i class="fa fa-youtube"></i>
      </a>
    </div>
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
        <!--<h2>Σύντομα κοντά σας</h2>
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
        </div> -->
      </div>
      <div class="arrow">
        <i class="fa fa-angle-down"></i>
      </div>
    </header>
    <main>
      <div class="content clearfix">
        <?php
          $servername = "db";
          $username = "sotiris";
          $password = "skavvouras";

          $conn = new mysqli($servername, $username, $password);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        ?>
        <section id="intro" class="shadow">
          <h1>Η παρτίδα του επιτραπέζιου JUMANJI, έχει ξεκινήσει!</h1>
          <p>
            Tο 2ο Σύστημα Ναυτοπροσκόπων Χανίων είναι ένα από τα τυχερά προσκοπικά
            συστήματα που έχουν παραλάβει το επιτραπέζιο. Εδώ και <span>13 μέρες</span> έχουμε
            εγκλωβιστεί μέσα στην παρτίδα και πρέπει να την τελειώσουμε για να
            βγούμε επιτέλους έξω!
            Για να γίνει όμως αυτό πρέπει ΟΛΟΙ οι παίκτες του συστήματος να
            βοηθήσουν!
          </p>
          <h2>Πώς θα γίνει αυτό;</h2>
          <p>
            Σε κάθε πίστα θα έρχεσαι σε επαφή με έναν εγκλωβισμένο βαθμοφόρο, που θα
            πρέπει να τον ελευθερώσεις κάνοντας τη δοκιμασία που εκείνος δεν
            κατάφερε να κάνει! Όσοι ολοκληρώσουν τις πίστες και βοηθήσουν ΟΛΟΥΣ τους
            βαθμοφόρους να ελευθερωθούν, θα λάβουν στο σπίτι το απόλυτο και
            απαραίτητο αξεσουάρ διαβίωσης στη φύση!
          </p>
        </section>
        <section id="info" class="shadow">
          <p>
            Θα λαμβάνετε τα μηνύματα με τις αποστολές <span>κάθε Τρίτη και κάθε Σάββατο</span>,
            όταν δηλαδή ανοίγουν οι διαδικτυακές πίστες! Ο κάθε ένας από εσάς,
            αναλόγως σε ποιό τμήμα βρίσκεται, θα στέλνει στον ανάλογο βαθμοφόρο μέιλ
            με την εκπλήρωση της πίστας, ώστε να ξεκλειδώνεται η επόμενη!
          </p>
        </section>
        <section id="ageli" class="col-1 first shadow">
          <h3>Αγέλη</h3>
          <p>Τα παιδιά της Αγέλης στέλνουν το mail τους στον
          παρακάτω σύνδεσμο.</p>
          <button>Στείλτε</button>
        </section>
        <section id="omada" class="col-1 shadow">
          <h3>Ομάδα</h3>
          <p>Τα παιδιά της Ομάδας στέλνουν το mail τους στον
          παρακάτω σύνδεσμο.</p>
          <button>Στείλτε</button>
        </section>
        <section id="koinotita" class="col-1 shadow">
        <h3>Κοινότητα</h3>
          <p>Τα παιδιά της Κοινότητας στέλνουν το mail τους στον
          παρακάτω σύνδεσμο.</p>
          <button>Στείλτε</button>
        </section>
      </div>
      <div class="content clearfix">
        <section id="outro" class="col-2 first shadow">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/CAFw58_Oy58"
            frameborder="0" allowfullscreen>
          </iframe>
        </section>
        <section class="col-1">
            <p>
              Ακούστε στο βίντεο τι έχουν να σας πουν οι βαθμοφόροι σας.
              Από αυτό το σημείο και μετά ξεκινούν οι αποστολές σας. Εγγραφθείτε
              στο site για να αποκτήσετε πρόσβαση. Καλή τύχη.
            </p>
          </div>
        </section>
      </div>
      <div class="content clearfix">
        <section class="col-2 first shadow">

          <h2>ΔΟΚΙΜΑΣΙΑ 1η: ΕΛΕΥΘΕΡΩΣΕ ΤΟ ΡΙΚΙ ΤΙΚΚΙ ΤΑΒΙ!</h2>
          <p>
            Αυτό που πρέπει να κάνετε για να ανοίξει η πύλη, είναι να
            παρακολουθήσετε την ταινία "Jumanji" ΠΡΟΣΕΚΤΙΚΑ, γιατί...
          </p>
          <ul>
            <li>
              <p>
                Πρέπει να τραβήξεις και να μας στείλεις ένα δικό σου βίντεο,
                διάρκειας από 3 έως 10 δευτερόλεπτα, με την αγαπημένη σου ατάκα της
                ταινίας! (Μπορείς να χρησιμοποιήσεις αξεσουάρ, τους γονείς σου και
                τα αδέρφια σου ή όοο,τι άλλο λαχταράει η καρδούλα σου).
              </p>
            </li>
            <li>
              <p>
                Έπειτα, δημιούργησε τη δική σου χρονοκάψουλα: γράψε ένα γράμμα στον
                εαυτό σου, ζωγράφισε και βάλε ό,τι άλλο θέλεις μέσα σε έναν φάκελο.
                Σφράγισε τον και άνοιξέ τον μετά από ένα χρόνο! Μην ξεχάσεις να μας
                στείλεις φωτογραφία με όλα όσα θα περιέχει η χρονοκάψουλα, καθώς και
                 το φάκελο σου.
              </p>
            </li>
          </ul>
        </section>
        <section class="col-1">
          <a target="_blank" href="https://www.imdb.com/title/tt2283362/?ref_=ttmi_tt">
            <img src="./images/movie_poster.jpg" alt="Jumanji: Welcome to the Jungle (2017) Poster from IMD">
          </a>
        </section>
        <section id="missions" class="col-1">
          <a href="./missions.php">
            Δες τις υπόλοιπες αποστολές
            <i class="fa fa-arrow-right"></i>
          </a>
        </section>
      </div>
    </main>
    <footer>
      &copy; 2020 skavvouras Dev. All Rights Reserved.
    </footer>
    <script>
    $(document).ready(function(){

      //Check to see if the window is top if not then display button
      $(window).scroll(function(){
          if ($(this).scrollTop() > 100) {
              $('#scroll-btn').fadeIn();
          } else {
              $('#scroll-btn').fadeOut();
          }
      });

      //Click event to scroll to top
      $('#scroll-btn').click(function(){
          $('html, body').animate({scrollTop : 0},800);
          return false;
      });

    });
    </script>
    <!-- <script type="text/javascript">
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
    </script> -->
  </body>
</html>
