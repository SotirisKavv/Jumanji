<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/jumanjiLogo.png" />
    <link rel="stylesheet" href="./index.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to Jumanji Countdown</title>
  </head>
  <body>
    <div id="container">
      <h1>Καλώς ήλθατε στο Jumanji.</h1>
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
      <?php
        $servername = "db";
        $username = "sotiris";
        $password = "skavvouras";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected succesfully";
      ?>
    </div>
    <script type="text/javascript">
      const date = new Date("24 mar 2020 19:00:00").getTime();
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

        if (d<=0)
          clearInterval(x)

          document.getElementById("days").innerHTML = '00';
          document.getElementById("hours").innerHTML = '00';
          document.getElementById("mins").innerHTML = '00';
          document.getElementById("secs").innerHTML = '00';
        }, 1000)
    </script>
  </body>
</html>
