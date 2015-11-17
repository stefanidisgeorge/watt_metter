<?php 
    // Start MySQL Connection
    include('dbconnect.php'); 
?>
<!DOCTYPE html>
<html>
<head>

    <title>Watt Meter</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src = 'http://code.jquery.com/jquery-1.8.2.min.js'></script>
	<script src = 'updateWatt.js'></script>
	<script src="raphael-2.1.4.min.js"></script>
<script src="justgage-1.1.0.min.js"></script>
    <link href="css/theme.css" rel="stylesheet" media="screen">	
   
</head>

<body>
    <section class="container">
    	<!--Take navbar from a seperate php file-->
	<?php include('menu.php');  ?>
        <div class="jumbotron" style="text-align: center">
            <h1>Watt Meter</h1>
			
			<form  style="text-align: center;" class = "firstForm" id = "content">
		<div  style="text-align: center;" class = "content">
			<div  style="text-align: center width:400px; height:320px" id="g1">
		</div>


         </div>
</div>
		</form>
  

        <div class="row">
            <div class="col-lg-4">


                </div>
                </div>
                </section>
                </body>

                </html>
                
