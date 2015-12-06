<?php
// Start MySQL Connection
include('dbconnect.php');
date_default_timezone_set('Europe/Athens');


$currentDate = date('d/m/Y H:i:s a');
$hour        = $currentDate[11] . $currentDate[12];
$day         = $currentDate[0] . $currentDate[1];
$month       = $currentDate[3] . $currentDate[4];
$year        = $currentDate[6] . $currentDate[7] . $currentDate[8] . $currentDate[9];
$date        = $day . $month . $year;
$array       = array();

$SQLGetLogs = $odb->query("SELECT * FROM `stats` ORDER BY `id` DESC Limit 48");
while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
    //$id=$getInfo['id'];
    $lastdate   = $getInfo['date'];
    $datenumber = substr($lastdate, 0, -6);
    $lasttime   = $getInfo['time'];
    $watt       = $getInfo['sum'];
    $counter    = $getInfo['counter'];
   if ($datenumber == $day) {
        $array[$lasttime] = $watt / $counter;
        
    }
}

asort($array);

?>

<script>
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Hourly Average Watt Consumption',
            x: -20 //center
        },
        xAxis: {
categories: [<?php foreach ($array as $key => $val) { echo '\''.$key.':00\',';} ?>]
        },
        yAxis: {
            title: {
                text: 'Consumption (Watt)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' Watt'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
		    showInLegend: false, 
            name: 'Consumption',
            data: [<?php foreach ($array as $key => $val) { echo ''.number_format($val, 2, '.', ',').',';} ?>]
        }]
    });
});
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
