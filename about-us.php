<?php
    // Start MySQL Connection
    include('dbconnect.php');
?>


<!DOCTYPE html>
<html>
<head>

    <title>About Us</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src = 'http://code.jquery.com/jquery-1.8.2.min.js'></script>
	<script src = 'updateWatt.js'></script>
	<script src="raphael-2.1.4.min.js"></script>
<script src="justgage-1.1.0.min.js"></script>
    <link href="css/theme.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body>
    <section class="container">
      <?php include('menu.php');  ?>
        <div class="jumbotron" style="text-align: center">
            <h1>About Us</h1>

			<form  style="text-align: center;" class = "firstForm" id = "content">
		<div  style="text-align: left;" class = "content">
      <p>Το παρόν site είναι κομμάτι ενός project από μια ομάδα φοιτητών του Τμήματος Μηχανικών Πληροφορικής και Τηλεπικοινωνιών του Πανεπιστημίου Δυτικής Μακεδονίας. </p>

      <p>Στόχος ήταν η δημιουργία ενός μετρητή Watt με την βοήθεια ενός μικροελεγκτή Arduino. Στην συνέχεια τα δεδομένα από το Arduino μέσω σύνδεσης με το διαδίκτυο εμφανίζονται σε ζωντανό χρόνο σε αυτή την ιστοσελίδα.</p>

      <p>Πέρα από τη live ένδειξη κατανάλωσης δίνεται η δυνατότητα παρουσίασης δεδομένων παρελθοντικών μετρήσεων με την μορφή διαγράμματος.</p>

 <p>
 <p>
  <h3>Η ομάδα αποτελείται από 4 άτομα :</h3>
  <ul>
  <li>Γιώργος Στεφανίδης | <a href="https://www.facebook.com/georgestef" <i class="fa fa-facebook-official"></a></i> | <a href="https://gr.linkedin.com/in/stefanidisgeorge" <i class="fa fa-linkedin"></a> </li>
  <li>Μόδης Αλέξανδρος | <a href="https://www.facebook.com/alexander.modis" <i class="fa fa-facebook-official"></a></i> | <a href="https://gr.linkedin.com/in/alexmodis" <i class="fa fa-linkedin"></i></a> </li>
  <li>Γιώργος Δήμας | <a href="https://www.facebook.com/geodimas" <i class="fa fa-facebook-official"></a></i> | <i class="fa fa-linkedin"></i> </li>
  <li>Βασίλης Μπαλάφας | <a href="https://www.facebook.com/Vasilis197" <i class="fa fa-facebook-official"></a></i> | <i class="fa fa-linkedin"></i> </li>
  </ul>



         </div>
</div>
		</form>


        <div class="row">
            <div class="col-lg-4">


                </div>
                </div>
                </section>
                </body>
<?php include('footer.php');  ?>
                </html>
