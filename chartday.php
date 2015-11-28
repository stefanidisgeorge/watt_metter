<?php
// Start MySQL Connection
include('dbconnect.php');
date_default_timezone_set('Europe/Athens');
$currentDate = date('d/m/Y H:i:s a');
$hour        = $currentDate[11] . $currentDate[12];
$day         = $currentDate[0] . $currentDate[1];
$month       = $currentDate[3] . $currentDate[4];

$year       = $currentDate[6] . $currentDate[7] . $currentDate[8] . $currentDate[9];
$date       = $day . $month . $year;
$array1     = array();
$array2     = array();
$SQLGetLogs = $odb->query("SELECT * FROM `stats` ORDER BY `id` DESC Limit 168");
while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
    //$id=$getInfo['id'];
    $lastdate    = $getInfo['date'];
    $datenumber  = substr($lastdate, 0, -6);
    $monthnumber = substr($lastdate, 2);
    $monthnumber = substr($monthnumber, 0, -4);
    $watt        = $getInfo['sum'];
    $counter     = $getInfo['counter'];
    if ($monthnumber == $month) {
        if (array_key_exists($datenumber, $array1)) {
            $array1[$datenumber] = $array1[$datenumber] + $watt;
            $array2[$datenumber] = $array2[$datenumber] + $counter;
        } else {
            $array1[$datenumber] = $watt;
            $array2[$datenumber] = $counter;
        }
        
    }
}

ksort($array1);
ksort($array2);
foreach ($array2 as $key => $val) {
    $array1[$key] = $array1[$key] / $val;
}
?>

<script>
$(function () {
    $('#container1').highcharts({
        title: {
            text: 'Daily Average Watt Consumption',
            x: -20 //center
        },
        xAxis: {
categories: [<?php foreach ($array1 as $key => $val) { echo '\''.$key.'\',';} ?>]
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
            data: [<?php foreach ($array1 as $key => $val) { echo ''.$val.',';} ?>]
        }]
    });
});
</script>


<div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
