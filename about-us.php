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

    <title>About Us</title>

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
            <h1>Σχετικά με την ομάδα μας</h1>

		<div  style="text-align: left;" class = "content">
      <p>Το παρόν site είναι κομμάτι ενός project από μια ομάδα φοιτητών του Τμήματος Μηχανικών Πληροφορικής και Τηλεπικοινωνιών του Πανεπιστημίου Δυτικής Μακεδονίας. </p>

      <p>Στόχος ήταν η δημιουργία ενός μετρητή Watt με την βοήθεια ενός μικροελεγκτή Arduino. Στην συνέχεια τα δεδομένα από το Arduino μέσω σύνδεσης με το διαδίκτυο εμφανίζονται σε ζωντανό χρόνο σε αυτή την ιστοσελίδα.</p>

      <p>Πέρα από τη live ένδειξη κατανάλωσης δίνεται η δυνατότητα παρουσίασης δεδομένων παρελθοντικών μετρήσεων με την μορφή διαγράμματος.</p>

 <p>
 <p>
  <h3>Η ομάδα αποτελείται από 4 άτομα :</h3>
  <ul>
  <li>Γιώργος Στεφανίδης | <a href="https://www.facebook.com/georgestef" <i class="fa fa-facebook-official"></a></i> | <a href="https://gr.linkedin.com/in/stefanidisgeorge" <i class="fa fa-linkedin"></a> | <a href="mailto:geo_stef@ieee.org" <i class="fa fa-envelope"></a> </li>
  <li>Αλέξανδρος Μόδης | <a href="https://www.facebook.com/alexander.modis" <i class="fa fa-facebook-official"></a></i> | <a href="https://gr.linkedin.com/in/alexmodis" <i class="fa fa-linkedin"></i></a> | <a href="mailto:Modis.alex@gmail.com" <i class="fa fa-envelope"></a> </li>
  <li>Γιώργος Δήμας | <a href="https://www.facebook.com/geodimas" <i class="fa fa-facebook-official"></a></i> |<a href="https://gr.linkedin.com/in/geodhmas" <i class="fa fa-linkedin"></i> </a>| <a href="#" <i class="fa fa-envelope"></a> </li>
  <li>Βασίλης Μπαλάφας | <a href="https://www.facebook.com/Vasilis197" <i class="fa fa-facebook-official"></a></i> | <i class="fa fa-linkedin"></i> | <a href="mailto:me@vasilis.pw" <i class="fa fa-envelope"></a> </li>
  </ul>



         </div>
</div>

<!-- End Greek -->
<?php } else { ?>
<!-- English-->

        <div class="jumbotron" style="text-align: center">
            <h1>About Us</h1>

		<div  style="text-align: left;" class = "content">
      <p>This website is part of a project from a team of students of Department of Informatics Telecommunications Engineering of University of Western Macedonia</p>

      <p>The target was the construction of a Watt cosmumption counter with the help of an Arduino microcontroller. Then we present the stats we got from the Arduino in this website.</p>

      <p>Beyond the live indication of the consumption, there is the ability to present past data with the form of graphs.</p>

 <p>
 <p>
  <h3>The team consists of 4 people :</h3>
  <ul>
  <li>George Stefanidis | <a href="https://www.facebook.com/georgestef" <i class="fa fa-facebook-official"></a></i> | <a href="https://gr.linkedin.com/in/stefanidisgeorge" <i class="fa fa-linkedin"></a> | <a href="mailto:geo_stef@ieee.org" <i class="fa fa-envelope"></a> </li>
  <li>Alexandros Modis | <a href="https://www.facebook.com/alexander.modis" <i class="fa fa-facebook-official"></a></i> | <a href="https://gr.linkedin.com/in/alexmodis" <i class="fa fa-linkedin"></i></a> | <a href="mailto:Modis.alex@gmail.com" <i class="fa fa-envelope"></a> </li>
  <li>George Dimas | <a href="https://www.facebook.com/geodimas" <i class="fa fa-facebook-official"></a></i> |<a href="https://gr.linkedin.com/in/geodhmas" <i class="fa fa-linkedin"></i> </a>| <a href="#" <i class="fa fa-envelope"></a> </li>
  <li>Vasilis Balafas | <a href="https://www.facebook.com/Vasilis197" <i class="fa fa-facebook-official"></a></i> | <i class="fa fa-linkedin"></i> | <a href="mailto:me@vasilis.pw" <i class="fa fa-envelope"></a> </li>
  </ul>



         </div>
</div>
<!-- End English -->
<?php } ?>



        <div class="row">
            <div class="col-lg-4">


                </div>
                </div>
				<div class="row">
					<div class="col-sm-12" style="text-align: center;" > Copyright © Watt Meter 2015</div>
            
				</div>
                </section>
                </body>

                </html>
