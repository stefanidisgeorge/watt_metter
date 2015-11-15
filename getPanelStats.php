<?php
include('dbconnect.php'); 
$SQLGetLogs = $odb -> query("SELECT * FROM `stats` ORDER BY `id` DESC Limit 1");
				while($getInfo = $SQLGetLogs -> fetch(PDO::FETCH_ASSOC))
				{
					$watt = $getInfo['watt'];
				
					
				}
	
	$response = array(
					'status' => 'ok',
					'watts' =>  $watt
					);
	$encoded = json_encode($response);
	echo $encoded;
	return true;

?>
