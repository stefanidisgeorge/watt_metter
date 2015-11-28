<?php
if(!isset($_COOKIE["lang"])) {
$query = json_decode(file_get_contents('https://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']));
$country=$query->{'country_code'};
if($country=="GR"){
setcookie("lang", "GR", time() + (86400 * 30), "/");
}
else
{
setcookie("lang", "ENG", time() + (86400 * 30), "/");
}
}
?>


<!DOCTYPE html>
<html>
<head>

    <title>About the Project</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src = 'http://code.jquery.com/jquery-1.8.2.min.js'></script>

    <link href="css/theme.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body>
    <section class="container">
      <?php include('menu.php');  ?>
	  
	  <?php if($_COOKIE["lang"]=="GR"){ ?>
<!-- Greek -->
        <div class="jumbotron" style="text-align: center">
            <h1>About the Project</h1>
            <hr>
            <p>
            <hr>

		<div  style="text-align: left;" class = "content">
      <div class="row">
          <div style="text-align: center;" class="col-lg-12">
            <h2><u>Arduino Uno</u> </h2>
            <p>
          </div>
          <div class="col-lg-8">
              <img src="http://www.instructables.com/files/orig/FU2/6C3W/I1TRCS2B/FU26C3WI1TRCS2B.jpg" alt="Arduino Uno" height="90%" width="90%">
         </div>
          <div style="text-align: left;" class="col-lg-4">
            <h4>The Arduino Uno is a microcontroller board based on the ATmega328 (datasheet).<p> <p>It has 14 digital input/output pins (of which 6 can be used as PWM outputs), 6 analog inputs, a 16 MHz ceramic resonator, a USB connection, a power jack, an ICSP header, and a reset button. <p>It contains everything needed to support the microcontroller; simply connect it to a computer with a USB cable or power it with a AC-to-DC adapter or battery to get started.</h4>
          </div>
      </div>
      <hr>
      <div class="row">
          <div style="text-align: center;" class="col-lg-12">
            <h2> <u>Arduino Uno Ethernet Shield</u> </h2>
          </div>
          <div class="col-lg-8">
              <img src="https://www.arduino.cc/en/uploads/Guide/ArduinoWithEthernetShield.jpg" alt="Arduino Uno" height="90%" width="90%">
          </div>
          <div style="text-align: left;" class="col-lg-4">
            <h3>The Arduino Ethernet Shield allows you to easily connect your Arduino to the internet.<p><p> This shield enables your Arduino to send and receive data from anywhere in the world with an internet connection.</h3>
          </div>
      </div>
      <hr>
      <div class="row">
        <div style="text-align: center;" class="col-lg-12">
          <h2> <u>Non-invasive AC Current Sensor</u> </h2>
        </div>
        <div class="col-lg-8">
          <img src="http://grobotronics.com/images/detailed/10/E000020_Non-invasive_AC_current_sensor_(30A_max).jpg" alt="Arduino Uno" height="90%" width="90%">
        </div>
          <div style="text-align: left;" class="col-lg-4">
            <h3>Current transformers (CTs) are sensors that are used for measuring alternating current. <p> <p>They are particularly useful for measuring whole building electricity consumption (or generation for that matter).</h3>

          </div>
      </div>



         </div>
</div>

<!-- End Greek -->
<?php } else { ?>

<!-- English -->
        <div class="jumbotron" style="text-align: center">
            <h1>About the Project</h1>
            <hr>
            <p>
            <hr>

		<div  style="text-align: left;" class = "content">
      <div class="row">
          <div style="text-align: center;" class="col-lg-12">
            <h2><u>Arduino Uno</u> </h2>
            <p>
          </div>
          <div class="col-lg-8">
              <img src="http://www.instructables.com/files/orig/FU2/6C3W/I1TRCS2B/FU26C3WI1TRCS2B.jpg" alt="Arduino Uno" height="90%" width="90%">
         </div>
          <div style="text-align: left;" class="col-lg-4">
            <h4>The Arduino Uno is a microcontroller board based on the ATmega328 (datasheet).<p> <p>It has 14 digital input/output pins (of which 6 can be used as PWM outputs), 6 analog inputs, a 16 MHz ceramic resonator, a USB connection, a power jack, an ICSP header, and a reset button. <p>It contains everything needed to support the microcontroller; simply connect it to a computer with a USB cable or power it with a AC-to-DC adapter or battery to get started.</h4>
          </div>
      </div>
      <hr>
      <div class="row">
          <div style="text-align: center;" class="col-lg-12">
            <h2> <u>Arduino Uno Ethernet Shield</u> </h2>
          </div>
          <div class="col-lg-8">
              <img src="https://www.arduino.cc/en/uploads/Guide/ArduinoWithEthernetShield.jpg" alt="Arduino Uno" height="90%" width="90%">
          </div>
          <div style="text-align: left;" class="col-lg-4">
            <h3>The Arduino Ethernet Shield allows you to easily connect your Arduino to the internet.<p><p> This shield enables your Arduino to send and receive data from anywhere in the world with an internet connection.</h3>
          </div>
      </div>
      <hr>
      <div class="row">
        <div style="text-align: center;" class="col-lg-12">
          <h2> <u>Non-invasive AC Current Sensor</u> </h2>
        </div>
        <div class="col-lg-8">
          <img src="http://grobotronics.com/images/detailed/10/E000020_Non-invasive_AC_current_sensor_(30A_max).jpg" alt="Arduino Uno" height="90%" width="90%">
        </div>
          <div style="text-align: left;" class="col-lg-4">
            <h3>Current transformers (CTs) are sensors that are used for measuring alternating current. <p> <p>They are particularly useful for measuring whole building electricity consumption (or generation for that matter).</h3>

          </div>
      </div>



         </div>
</div>

<!-- End English -->


<?php } ?>
        <div class="row">
            <div class="col-lg-4">


                </div>
                </div>
                </section>
                </body>
<?php include('footer.php');  ?>
                </html>
