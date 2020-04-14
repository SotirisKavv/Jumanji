<?php
  session_start();

  if (!isset($_SESSION['uname'])) {
    header("Location: ./login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/jumanjiLogo.png" />
    <link rel="stylesheet" href="./css/missions.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/b9ef111606.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Αποστολές</title>
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
    <header class="clearfix">
      <div class="account">
        <div class="logout">
          <a href="./php/logout.php">Logout</a>
        </div>
      </div>
      <div class="title">
        <h1>Αποστολές</h1>
        <p>
          Καλησπέρα <?php echo $_SESSION['uname']; ?>,<br/>
          Αυτή είναι η σελίδα στην οποία μπορείτε να βλέπετε ποιες αποστολές έχετε
          ξεκλειδώσει και σε πόσο χρόνο θα ξεκλειδωθεί η επόμενη. Εκτελέστε τις
          αποστολές στην ώρα τους για να κερδίσετε το απόλυτο αξεσουάρ επιβίωσης.
          Όλα αυτά, πάντα, <span>#ΜένονταςΜέσα</span>. Καλή τύχη.
        </p>
      </div>
    </header>
    <main>
      <div class="mission clearfix">
        <h2>ΔΟΚΙΜΑΣΙΑ 1η: ΕΛΕΥΘΕΡΩΣΕ ΤΟ ΡΙΚΙ ΤΙΚΚΙ ΤΑΒΙ!</h2>
        <section class="col-2 first">
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
      </div>
      <?php
        date_default_timezone_set('EET');
        $now = new DateTime();
        if ($_SESSION['level']>=2) {
          $date = new DateTime("2020-3-28 19:00:00.00");
          if ($date>$now) {
            echo "<div class=\"mission clearfix\">
                    <h2>Δοκιμασία 2η</h2>
                    <div class=\"countdown\">
                     <div class=\"countd\">
                       <span id=\"days2\">00</span>
                       DAYS
                     </div>
                     <div class=\"countd\">
                       <span id=\"hours2\">00</span>
                       HOURS
                     </div>
                     <div class=\"countd\">
                       <span id=\"mins2\">00</span>
                       MINUTES
                     </div>
                     <div class=\"countd\">
                       <span id=\"secs2\">00</span>
                       SECONDS
                     </div>
                     <p>
                       Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                     </p>
                    </div>
                  </div>";
          } elseif ($date <= $now) {
            echo "<div class=\"mission clearfix\">
                    <h2>ΔΟΚΙΜΑΣΙΑ 2η: ΕΛΕΥΘΕΡΩΣΕ ΤΟ ΣΟΛΟΜΟ!</h2>
                    <section class=\"col-1 first\">
                      <p>
                      Κατασκεύασε το δικό σου επιτραπέζιο. Μπορείς να
                      εμπνευστείς από τα παρακάτω:
                      </p>
                    </section>
                    <section class=\"col-2\">
                      <iframe src=\"https://drive.google.com/file/d/15apWoE_Hbu-Jl1Y2QIiP8j9rsMgw3ytj/preview\"
                         width=\"640\" height=\"380\"></iframe>
                    </section>
                    <section class=\"col-h first img\">
                      <img src=\"./images/boardgames2.png\"/>
                    </section>
                    <section class=\"col-h img\">
                      <img src=\"./images/boardgames.png\"/>
                    </section>
                  </div>";
          }
        }
        if ($_SESSION['level']>=3) {
          $date = new DateTime("2020-3-31 19:00:00.00");
          if ($date>$now) {
            echo "<div class=\"mission clearfix\">
                    <h2>Δοκιμασία 3η</h2>
                    <div class=\"countdown\">
                     <div class=\"countd\">
                       <span id=\"days3\">00</span>
                       DAYS
                     </div>
                     <div class=\"countd\">
                       <span id=\"hours3\">00</span>
                       HOURS
                     </div>
                     <div class=\"countd\">
                       <span id=\"mins3\">00</span>
                       MINUTES
                     </div>
                     <div class=\"countd\">
                       <span id=\"secs3\">00</span>
                       SECONDS
                     </div>
                     <p>
                       Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                     </p>
                    </div>
                  </div>";
          } elseif ($date <= $now) {
            echo "<div class=\"mission clearfix\">
                    <h2>ΔΟΚΙΜΑΣΙΑ 3η: ΕΛΕΥΘΕΡΩΣΕ ΤΗ ΡΑΞΑ!</h2>
                    <section class=\"col-2 first\">
                      <iframe src=\"https://drive.google.com/file/d/1OFuNI0l7XHyp1k7-5_MsCuIXwAJHUd7-/preview\"
                        width=\"640\" height=\"380\">
                        </iframe>
                    </section>
                    <section class=\"col-1\">
                      <p>
                        Φτιάξε το δικό σου πύργο... με τραπουλόχαρτα
                        (τουλάχιστον 2 ορόφων) και στείλε μαας σέλφι φωτογραφία.
                      </p>
                    </section>
                  </div>";
          }
        }
        if ($_SESSION['level']>=4) {
          $date = new DateTime("2020-4-4 19:00:00.00");
          if ($date>$now) {
            echo "<div class=\"mission clearfix\">
                    <h2>Δοκιμασία 4η</h2>
                    <div class=\"countdown\">
                     <div class=\"countd\">
                       <span id=\"days4\">00</span>
                       DAYS
                     </div>
                     <div class=\"countd\">
                       <span id=\"hours4\">00</span>
                       HOURS
                     </div>
                     <div class=\"countd\">
                       <span id=\"mins4\">00</span>
                       MINUTES
                     </div>
                     <div class=\"countd\">
                       <span id=\"secs4\">00</span>
                       SECONDS
                     </div>
                     <p>
                       Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                     </p>
                    </div>
                  </div>";
          } elseif ($date <= $now) {
            echo "<div class=\"mission clearfix\">
                    <h2>ΔΟΚΙΜΑΣΙΑ 4η: ΕΛΕΥΘΕΡΩΣΕ ΤΗ ΧΕΛΩΝΑ!</h2>
                    <section class=\"col-1 first\">
                      <p>
                        Φύτεψε το δικό σου φυτό σε κήπο ή σε γλάστρα και στείλε
                        μας 4 φωτογραφίες με την ανάπτυξη του φυτού.
                      </p>
                    </section>
                    <section class=\"col-2\">
                      <iframe src=\"https://drive.google.com/file/d/1izketSsn7UT796IyNEZXK28iUS7CIpf3/preview\"
                        width=\"640\" height=\"340\">
                        </iframe>
                    </section>
                  </div>";
          }
        }
        if ($_SESSION['level']>=5) {
          $date = new DateTime("2020-4-7 19:00:00.00");
          if ($date>$now) {
            echo "<div class=\"mission clearfix\">
                    <h2>Δοκιμασία 5η</h2>
                    <div class=\"countdown\">
                     <div class=\"countd\">
                       <span id=\"days5\">00</span>
                       DAYS
                     </div>
                     <div class=\"countd\">
                       <span id=\"hours5\">00</span>
                       HOURS
                     </div>
                     <div class=\"countd\">
                       <span id=\"mins5\">00</span>
                       MINUTES
                     </div>
                     <div class=\"countd\">
                       <span id=\"secs5\">00</span>
                       SECONDS
                     </div>
                     <p>
                       Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                     </p>
                    </div>
                  </div>";
          } elseif ($date <= $now) {
            echo "<div class=\"mission clearfix\">
                    <h2>ΔΟΚΙΜΑΣΙΑ 5η: ΕΛΕΥΘΕΡΩΣΕ ΤΟ ΣΚΑΝΤΖΟΧΟΙΡΟ!</h2>
                    <section class=\"col-2 first\">
                      <iframe src=\"https://drive.google.com/file/d/1EM7qQXrkU4TVtsc1k3386ExXG6tk_MvD/preview\"
                        width=\"640\" height=\"330\"></iframe>
                    </section>
                    <section class=\"col-1\">
                      <p>
                        Δημιούργησε το γενεολογικό σου δένδρο και φτιάξε το
                        οικογενειακό οικόσημο. Περιμένουμε φωτογραφία.
                      </p>
                    </section>
                  </div>";
          }
        }
        if ($_SESSION['level']>=6) {
          $date = new DateTime("2020-4-11 19:00:00.00");
          if ($date>$now) {
            echo "<div class=\"mission clearfix\">
                    <h2>Δοκιμασία 6η</h2>
                    <div class=\"countdown\">
                     <div class=\"countd\">
                       <span id=\"days6\">00</span>
                       DAYS
                     </div>
                     <div class=\"countd\">
                       <span id=\"hours6\">00</span>
                       HOURS
                     </div>
                     <div class=\"countd\">
                       <span id=\"mins6\">00</span>
                       MINUTES
                     </div>
                     <div class=\"countd\">
                       <span id=\"secs6\">00</span>
                       SECONDS
                     </div>
                     <p>
                       Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                     </p>
                    </div>
                  </div>";
          } elseif ($date <= $now) {
            echo "<div class=\"mission clearfix\">
                    <h2>ΔΟΚΙΜΑΣΙΑ 6η: ΕΛΕΥΘΕΡΩΣΕ ΤΗΝ ΜΠΑΓΚΙΡΑ!</h2>
                    <section class=\"col-1 first\">
                      <p>
                        Κάνε vlog με την παρασκευή της αγαπημένης σου συνταγής,
                        ενώ παράλληλα θα τη φτιάχνεις. Βίντεο και φωτογραφίες με
                        τη συνταγή (υλικά, εκτέλεση).
                      </p>
                    </section>
                    <section class=\"col-2\">
                      <iframe src=\"https://drive.google.com/file/d/1OHjo-mqR10sRjwUmoLxhLwUhwFN1t0gp/preview\"
                        width=\"640\" height=\"330\">
                        </iframe>
                    </section>
                  </div>";
          }
        }
        if ($_SESSION['level']>=7) {
          $date = new DateTime("2020-4-14 19:00:00.00");
          if ($date>$now) {
            echo "<div class=\"mission clearfix\">
                    <h2>Δοκιμασία 7η</h2>
                    <div class=\"countdown\">
                     <div class=\"countd\">
                       <span id=\"days7\">00</span>
                       DAYS
                     </div>
                     <div class=\"countd\">
                       <span id=\"hours7\">00</span>
                       HOURS
                     </div>
                     <div class=\"countd\">
                       <span id=\"mins7\">00</span>
                       MINUTES
                     </div>
                     <div class=\"countd\">
                       <span id=\"secs7\">00</span>
                       SECONDS
                     </div>
                     <p>
                       Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                     </p>
                    </div>
                  </div>";
          } elseif ($date <= $now) {
            echo "<div class=\"mission clearfix\">
                    <h2>ΔΟΚΙΜΑΣΙΑ 7η: ΕΛΕΥΘΕΡΩΣΕ ΤΟ ΔΕΛΦΙΝΙ (ΤΟ ΜΙΚΡΟ)!</h2>
                    <section class=\"col-2 first\">
                      <iframe src=\"https://drive.google.com/file/d/1flrgF0jsCI9pWJ7ZaU33XbnHua-q1zum/preview\"
                        width=\"640\" height=\"330\">
                        </iframe>
                    </section>
                    <section class=\"col-1\">
                      <p>
                        Μάθε το όνομά σου στη νοηματική γλώσσα και στείλε το μας
                        σε βίντεο.
                      </p>
                    </section>
                  </div>";
          }
        }
        if ($_SESSION['level']>=8) {
          $date = new DateTime("2020-4-21 19:00:00.00");
          if ($date>$now) {
            echo "<div class=\"mission clearfix\">
                    <h2>Δοκιμασία 8η</h2>
                    <div class=\"countdown\">
                     <div class=\"countd\">
                       <span id=\"days8\">00</span>
                       DAYS
                     </div>
                     <div class=\"countd\">
                       <span id=\"hours8\">00</span>
                       HOURS
                     </div>
                     <div class=\"countd\">
                       <span id=\"mins8\">00</span>
                       MINUTES
                     </div>
                     <div class=\"countd\">
                       <span id=\"secs8\">00</span>
                       SECONDS
                     </div>
                     <p>
                       Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                     </p>
                    </div>
                  </div>";
          } elseif ($date <= $now) {
            echo "<div class=\"mission clearfix\">
                    <h2>ΔΟΚΙΜΑΣΙΑ 8Η: ΕΛΕΥΘΕΡΩΣΤΗ ΤΟ ΣΑΧΥ!</h2>
                    <section class=\"col-1 first\">
                      <p>

                      </p>
                    </section>
                    <section class=\"col-2\">
                      <iframe src=\"#\"
                         width=\"640\" height=\"380\"></iframe>
                    </section>
                  </div>";
          }
        }
        if ($_SESSION['level']>=9) {
          $date = new DateTime("2020-4-25 19:00:00.00");
          if ($date>$now) {
            echo "<div class=\"mission clearfix\">
                    <h2>Δοκιμασία 9η</h2>
                    <div class=\"countdown\">
                     <div class=\"countd\">
                       <span id=\"days9\">00</span>
                       DAYS
                     </div>
                     <div class=\"countd\">
                       <span id=\"hours9\">00</span>
                       HOURS
                     </div>
                     <div class=\"countd\">
                       <span id=\"mins9\">00</span>
                       MINUTES
                     </div>
                     <div class=\"countd\">
                       <span id=\"secs9\">00</span>
                       SECONDS
                     </div>
                     <p>
                       Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                     </p>
                    </div>
                  </div>";
          } elseif ($date <= $now) {
            echo "<div class=\"mission clearfix\">
                    <h2>ΔΟΚΙΜΑΣΙΑ 9Η: ΕΛΕΥΘΕΡΩΣΕ ΤΗΝ ΙΚΚΥ!</h2>
                    <section class=\"col-1 first\">
                      <p>

                      </p>
                    </section>
                    <section class=\"col-2\">
                      <iframe src=\"#\"
                         width=\"640\" height=\"380\"></iframe>
                    </section>
                  </div>";
          }
        }
          if ($_SESSION['level']>=10) {
            $date = new DateTime("2020-4-28 19:00:00.00");
            if ($date>$now) {
              echo "<div class=\"mission clearfix\">
                      <h2>Δοκιμασία 10η</h2>
                      <div class=\"countdown\">
                       <div class=\"countd\">
                         <span id=\"days10\">00</span>
                         DAYS
                       </div>
                       <div class=\"countd\">
                         <span id=\"hours10\">00</span>
                         HOURS
                       </div>
                       <div class=\"countd\">
                         <span id=\"mins10\">00</span>
                         MINUTES
                       </div>
                       <div class=\"countd\">
                         <span id=\"secs10\">00</span>
                         SECONDS
                       </div>
                       <p>
                         Αν έχει μηδενιστεί το χρονόμετρο, πατήστε το κουμπί <i class=\"fa fa-refresh\"></i> (refresh).
                       </p>
                      </div>
                    </div>";
            } elseif ($date <= $now) {
              echo "<div class=\"mission clearfix\">
                      <h2>ΔΟΚΙΜΑΣΙΑ 10Η: ΕΛΕΥΘΕΡΩΣΕ ΤΟ ΜΑΟ!</h2>
                      <section class=\"col-1 first\">
                        <p>

                        </p>
                      </section>
                      <section class=\"col-2\">
                        <iframe src=\"#\"
                           width=\"640\" height=\"380\"></iframe>
                      </section>
                    </div>";
            }
        }
       ?>
    </main>
    <footer>
      &copy; 2020 skavvouras Dev. All Rights Reserved.
    </footer>

    <script type="text/javascript">
      const date2 = new Date("28 mar 2020 19:00:00").getTime();//2
      const date3 = new Date("31 mar 2020 19:00:00").getTime();//3
      const date4 = new Date("4 apr 2020 19:00:00").getTime();//4
      const date5 = new Date("7 apr 2020 19:00:00").getTime();//5
      const date6 = new Date("11 apr 2020 19:00:00").getTime();//6
      const date7 = new Date("14 apr 2020 19:00:00").getTime();//7
      const date8 = new Date("21 apr 2020 19:00:00").getTime();//8
      const date9 = new Date("25 apr 2020 19:00:00").getTime();//9
      const date10 = new Date("28 apr 2020 19:00:00").getTime();//10

      function setCountdown(date, dayT, hourT, minT, secT){
        const x = setInterval(() =>{
          const now = new Date().getTime();
          const d = date - now;

          var days= Math.floor(d/(1000*60*60*24)).toString();
          var hours= Math.floor((d%(1000*60*60*24))/(1000*60*60)).toString();
          var minutes= Math.floor((d%(1000*60*60))/(1000*60)).toString();
          var seconds= Math.floor((d%(1000*60))/1000).toString();

          document.getElementById(dayT).innerHTML = days;
          document.getElementById(hourT).innerHTML = hours;
          document.getElementById(minT).innerHTML = minutes;
          document.getElementById(secT).innerHTML = seconds;
          if (d<=0){
            clearInterval(x);
            document.getElementById(dayT).innerHTML = '00';
            document.getElementById(hourT).innerHTML = '00';
            document.getElementById(minT).innerHTML = '00';
            document.getElementById(secT).innerHTML = '00';
          }
        }, 1000);
      };

      setCountdown(date2, "days2", "hours2", "mins2", "secs2");
      setCountdown(date3, "days3", "hours3", "mins3", "secs3");
      setCountdown(date4, "days4", "hours4", "mins4", "secs4");
      setCountdown(date5, "days5", "hours5", "mins5", "secs5");
      setCountdown(date6, "days6", "hours6", "mins6", "secs6");
      setCountdown(date7, "days7", "hours7", "mins7", "secs7");
      setCountdown(date8, "days8", "hours8", "mins8", "secs8");
      setCountdown(date9, "days9", "hours9", "mins9", "secs9");
      setCountdown(date10, "days10", "hours10", "mins10", "secs10");

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
  </body>
</html>
