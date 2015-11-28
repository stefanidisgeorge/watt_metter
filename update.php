<?php
require("dbconnect.php");
date_default_timezone_set('Europe/Athens');
if (isset($_REQUEST['consumption'])) {
    $consumption = abs($_REQUEST['consumption']);
    $sum         = 0;
    $counter     = 0;
    $currentDate = date('d/m/Y H:i:s a');
    $hour        = $currentDate[11] . $currentDate[12];
    $day         = $currentDate[0] . $currentDate[1];
    $month       = $currentDate[3] . $currentDate[4];
    $year        = $currentDate[6] . $currentDate[7] . $currentDate[8] . $currentDate[9];
    $date        = $day . $month . $year;
    
    $SQLGetLogs = $odb->query("SELECT * FROM `stats` ORDER BY `id` DESC Limit 1");
    while ($getInfo = $SQLGetLogs->fetch(PDO::FETCH_ASSOC)) {
        $id          = $getInfo['id'];
        $lastedate   = $getInfo['date'];
        $lasttime    = $getInfo['time'];
        $lastsum     = $getInfo['sum'];
        $lastcounter = $getInfo['counter'];
    }
    
    $changedTime = ($hour != $lasttime);
    $changedDate = ($date != $lastedate);
    
    if ($changedDate == true) {
        $insertLogSQL = $odb->prepare("INSERT INTO `stats`(`date`,`time`,`watt`, `sum`, `counter`) VALUES (" . $date . "," . $hour . "," . $consumption . "," . $consumption . ",1)");
        $insertLogSQL->execute();
    } else {
        if ($changedTime == true) {
            $sum          = $consumption;
            $counter      = 1;
            $insertLogSQL = $odb->prepare("INSERT INTO `stats`(`date`,`time`,`watt`, `sum`, `counter`) VALUES (" . $date . "," . $hour . "," . $consumption . "," . $consumption . "," . $counter . ")");
            $insertLogSQL->execute();
        } else {
            $sum          = $lastsum + $consumption;
            $counter      = $lastcounter + 1;
            $insertLogSQL = $odb->prepare("UPDATE `stats` SET `watt`=" . $consumption . ",`sum`=" . $sum . ",`counter`=" . $counter . " WHERE `id` = " . $id);
            $insertLogSQL->execute();
        }
    }
}
header('Location: index.php');
?>