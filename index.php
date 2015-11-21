<?php
    // Start MySQL Connection
    include('dbconnect.php');
?>


<!DOCTYPE html>
<html>
<head>

    <title>Watt Meter</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src = 'https://code.jquery.com/jquery-1.11.1.min.js'></script>
	<script src = 'updateWatt.js'></script>
	<script src="raphael-2.1.4.min.js"></script>
<script src="justgage-1.1.0.min.js"></script>
    <link href="css/theme.css" rel="stylesheet" media="screen">
    <link href="css/themefot.css" rel="stylesheet" media="screen">


</head>

<body>
    <section class="container">
      <?php include('menu.php');  ?>
        <div class="jumbotron" style="text-align: center">
            <h1><b>Watt Meter</b></h1>

			<form  style="text-align: center;" class = "firstForm" id = "content">
		<div  style="text-align: center;" class = "content">
			<div  style="text-align: center width:400px; height:320px" id="g1">
		</div>


         </div>
		 </form>
</div>
		
		
		 <div class="jumbotron" style="text-align: center">
    <div class="row" >
  <div class="col-sm-12"  style="text-align: center;" >  <?php include('charthour.php');  ?></div>
  </div>
    </div>
			 <div class="jumbotron" style="text-align: center">

      <div class="row" >
  <div class="col-sm-12"  style="text-align: center;" >  <?php include('chartday.php');  ?></div>
  </div>
  </div>
  			 <div class="jumbotron" style="text-align: center">

     <div class="row" >
  <div class="col-sm-12"  style="text-align: center;" >  <?php include('chartmonth.php');  ?></div>
  </div>
    </div>
  			 <div class="jumbotron" style="text-align: center">

     <div class="row" >
  <div class="col-sm-12"  style="text-align: center;" >  <?php include('chartyear.php');  ?></div>
  </div>
    </div>
	
    <div class="row">
  <div class="col-sm-12" style="text-align: center;" > Copyright © 2015</div>
  
</div>

</section>


                </body>

                </html>
