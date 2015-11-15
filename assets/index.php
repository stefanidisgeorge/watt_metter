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
		 <nav class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex8-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Watt Meter</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex8-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
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
				<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		animationEnabled: true,
		title:{
			text: "Multi Series Spline Chart - Hide / Unhide via Legend"
		},
		data: [
		{
			type: "spline", //change type to bar, line, area, pie, etc
			showInLegend: true,        
			dataPoints: [
				{ x: 10, y: 51 },
				{ x: 20, y: 45},
				{ x: 30, y: 50 },
				{ x: 40, y: 62 },
				{ x: 50, y: 95 },
				{ x: 60, y: 66 },
				{ x: 70, y: 24 },
				{ x: 80, y: 32 },
				{ x: 90, y: 16}
			]
			},
			{
			type: "spline",
			showInLegend: true,        
			dataPoints: [
				{ x: 10, y: 21 },
				{ x: 20, y: 44},
				{ x: 30, y: 35 },
				{ x: 40, y: 45 },
				{ x: 50, y: 75 },
				{ x: 60, y: 58 },
				{ x: 70, y: 18 },
				{ x: 80, y: 30 },
				{ x: 90, y: 11}
			]
			}
		],
		legend: {
			cursor: "pointer",
			itemclick: function (e) {
				if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
					e.dataSeries.visible = false;
				} else {
					e.dataSeries.visible = true;
			}
			chart.render();
			}
		}
	});

	chart.render();
}
</script>

                </div>
                </div>
                </section>
                </body>
<script type="text/javascript" src="canvasjs.min.js"></script>
                </html>
                
